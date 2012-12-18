<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Transactions extends Controller_Extendcontroller {

	public function action_getTransactions() {
        $query = DB::query(Database::SELECT, 'SELECT a.*, b.nick
                                              FROM transactions a
                                              INNER JOIN users b ON b.id = a.user_id
                                              ORDER BY a.id DESC');
        $result = $query->execute()->as_array();
        $this->makeResponse(array('success' => true,
                                  'data' => $result));
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
                $modelOrder->priced = $modelOrder->price;
                $modelOrder->is_visible = 0;
                $modelOrder->status = 4; // Заказ готов, если транзакция полностью проведена

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
                    $modelProfitTransaction->save();
                }

                $modelOrder->save();
                $modelTransaction->save();
            }
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

        $antiProfitResult = DB::query(Database::SELECT, 'SELECT SUM(money) AS antiMoney
                                                     FROM transactions a
                                                     WHERE a.user_id = :user_id
                                                           AND a.type = 0')
            ->param(':user_id', $params['user_id'])
            ->execute()
            ->as_array();

        $this->makeResponse(round($profit - $antiProfitResult[0]['antiMoney'], 2), false);
    }

}
