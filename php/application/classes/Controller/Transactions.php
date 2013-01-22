<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Transactions extends Controller_Extendcontroller {

	public function action_getTransactions() {
        $params = $this->request->param();
        $currentBar = Request::factory('bars/getDefaultBarId')->execute()->body();
        $currentBar = json_decode($currentBar);

        $query = DB::query(Database::SELECT, 'SELECT a.*, b.nick, c.name AS order_coctail_name
                                              FROM transactions a
                                              INNER JOIN users b ON b.id = a.user_id
                                              INNER JOIN orders d ON d.id = a.order_id
                                              INNER JOIN coctails c ON d.coctail_id = c.id
                                              WHERE a.bar_id = '.$currentBar->data.'
                                              ORDER BY a.id
                                              LIMIT '.$params['limit'].' OFFSET '.$params['limit'] * ($params['page'] - 1));
       // echo $query;
        $result = $query->execute()->as_array();
        $total =  DB::query(Database::SELECT, 'SELECT COUNT(*) as num
                                               FROM transactions a
                                               WHERE a.bar_id = '.$currentBar->data)
                  ->execute()
                  ->as_array();
        $this->makeResponse(array('success' => true,
                                  'data' => $result,
                                  'total' => $total[0]['num']));
    }

    public function action_moveToTransactions() {
        $params = $this->request->param();

        // Если тип транзакций - заказы..
        if($params['t_type'] == 0) {
            if(isset($params['ids']) && $params['ids'] == '') {
                return;
            }
            $ids = json_decode($params['ids']);
            foreach($ids as $id) {

                $modelOrder = ORM::factory('order', $id);
                $modelTransaction = ORM::factory('transaction');
                $modelCoctail = ORM::factory('coctail', $modelOrder->coctail_id);

                $modelTransaction->order_id = $id;
                $modelTransaction->type = 0; // Уплата
                $modelTransaction->money = $modelOrder->price;
                $modelTransaction->user_id = $modelOrder->owner_id;
                $modelTransaction->bar_id = $modelOrder->bar_id;
                $modelOrder->priced = $modelOrder->price;
                $modelOrder->is_visible = 0;
                $modelOrder->status = 4; // Заказ готов, если транзакция полностью проведена

                $modelUser = ORM::factory('user', $modelOrder->owner_id);
                $modelUser->bill -= $modelOrder->price;
                $modelUser->save();

                // Теперь посчитаем профит-транзакции для каждого хозяина
                $query = DB::query(Database::SELECT, 'SELECT a.id,
                                                             b.type,
                                                             a.component_id,
                                                             a.capacity AS c_capacity,
                                                             b.buy_price,
                                                             b.capacity AS f_capacity,
                                                             b.name,
                                                             c.nick,
                                                             b.owner_id
                                                      FROM coctailscomponents a
                                                      INNER JOIN components b ON a.component_id = b.id
                                                      INNER JOIN users c ON c.id = b.owner_id
                                                      WHERE a.coctail_id = '.$modelOrder->coctail_id);
                $componentsResult = $query->execute()->as_array();
                $ownersProfit = array();
                // Как посчитать скидку на компонент, если известны цены на коктейли целиком...?
                // Если весь коктейль - единица, то со скидкой - его цена станет меньше в n раз, которые узнаем, разделив цену полную на цену со скидкой
                foreach($componentsResult as $key => $component) {
                    // Профит для каждого, кто вносит лепту в коктейль
                    if(array_search($component['type'], array(0, 1)) !== false) {
                        if(array_key_exists($component['nick'], $ownersProfit) === false) {
                            $ownersProfit[$component['nick']] = array();
                            $ownersProfit[$component['nick']]['user_id'] = $component['owner_id'];
                            $ownersProfit[$component['nick']]['profit'] = 0;

                        }
                        $ownersProfit[$component['nick']]['profit'] += (($modelCoctail->price - $modelOrder->discount) / $modelCoctail->price) * ($component['buy_price'] * $component['c_capacity'] / $component['f_capacity']) * (1 + $modelCoctail->profit_prozent / 100) * $modelOrder->quantity;
                        $ownersProfit[$component['nick']]['profit'] = round($ownersProfit[$component['nick']]['profit'], 2);
                    }
                }
                // Итерируем по всему массиву, чтобы записать профиты
                foreach($ownersProfit as $user => $data) {
                    $modelProfitTransaction = ORM::factory('transaction');
                    $modelProfitTransaction->order_id = $id;
                    $modelProfitTransaction->type = 1; // Прибавка
                    $modelProfitTransaction->money = $data['profit'];
                    $modelProfitTransaction->user_id = $data['user_id'];
                    $modelProfitTransaction->bar_id = $modelOrder->bar_id;
                    $modelProfitTransaction->save();

                    // Изменяем счёт
                    $modelUser = ORM::factory('user', $data['user_id']);
                    $modelUser->bill += $data['profit'];
                    $modelUser->save();
                }

                $modelOrder->save();
                $modelTransaction->save();
            }
       } elseif($params['t_type'] == 1 || $params['t_type'] == 2) { // Транзакция на пополнение или уменьшение юзерского счёта
            if(!isset($params['client']) || !isset($params['quantity'])) {
                return;
            }

            $modelUser = ORM::factory('user', $params['client']);
            if($params['t_type'] == 1) {
                $modelUser->bill += $params['quantity'];
            } else {
                $modelUser->bill -= $params['quantity'];
            }
            $modelUser->save();

            $modelProfitTransaction = ORM::factory('transaction');
            $modelProfitTransaction->order_id = -1;
            $modelProfitTransaction->type = ($params['t_type'] == 1) ? 1 : 0; // Прибавка или отнятие
            $modelProfitTransaction->money = $params['quantity'];
            $modelProfitTransaction->user_id = $params['client'];
            $modelProfitTransaction->bar_id = $modelUser->bar_id;
            $modelProfitTransaction->save();

        }
        $this->makeResponse(array('success' => true,
                                  'data' => 'Транзакции успешно проведены.'));
    }

    public function action_getCleanProfit() {
        $params = $this->request->param();
        $profitResult = DB::query(Database::SELECT, 'SELECT a.*,
                                                            b.quantity,
                                                            b.priced,
                                                            b.price,
                                                            c.profit_prozent
                                                     FROM transactions a
                                                     INNER JOIN orders b ON b.id = a.order_id
                                                     INNER JOIN coctails c ON b.coctail_id = c.id
                                                     WHERE a.user_id = :user_id
                                                           AND a.type = 1')
                    ->param(':user_id', $params['user_id'])
                    ->execute()
                    ->as_array();
        // Проходимся по всем транзакциям и вычисляем чистую прибыль ака профит исходя из скидки и цены
        $profit = 0;
        foreach($profitResult as $key => $transaction) {
            // Проценты можно делить пропорционально: 100 / % =  (70 + 30) / % = 70 / % + 30 / % . Процент от части равен сумму процентов от более мелких частей.
            // Один процент от стоимости для конкретной транзакции
            $oneProzent = $transaction['money'] / (100 + $transaction['profit_prozent']);
            // Цена без профита для конкретной транзакции
            $withoutProfit = $oneProzent * 100;
            // Разница между ценой с профитом и настоящей ценой, помноженной на количество, есть прибыль от заказа
            $profit += ($transaction['money'] - $withoutProfit) * $transaction['quantity'];
        }

       /* $antiProfitResult = DB::query(Database::SELECT, 'SELECT SUM(money) AS antiMoney
                                                     FROM transactions a
                                                     WHERE a.user_id = :user_id
                                                           AND a.type = 0')
            ->param(':user_id', $params['user_id'])
            ->execute()
            ->as_array();*/
        $roundedProfit = round($profit /*- $antiProfitResult[0]['antiMoney']*/, 2);
        $this->makeResponse($roundedProfit > 0 ? $roundedProfit : 0, false);
    }

}
