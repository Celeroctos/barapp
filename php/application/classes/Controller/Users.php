<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Users extends Controller_Extendcontroller {
    private $domain = 'http://forum.sonic-world.ru';
    private $avatarPath = '/uploads/';
    private $avatarPrefix = 'av-';
    private $fileTypes = array('jpg', 'png', 'gif', 'jpeg');
    private $defaultAvatar = '';

    public function action_addOwner() {
        $this->addUser(1);
    }

    public function action_addClient() {
        $this->addUser(0);
    }

    public function addUser($type) {
        $params = $this->request->param();

        $currentBar = Request::factory('bars/getDefaultBarId')->execute()->body();
        $currentBar = json_decode($currentBar);

        $model = ORM::factory('user');
        // Пишем нового хозяина бара
        $model->nick = $params['nick'];
        $model->email = $params['email'];
        $model->profile_id = $params['profile_id'];
        $model->type = $type; // Хозяин
        $model->bar_id = $currentBar->data;
        $model->save();

        $this->makeResponse(array('success' => true));
    }

    public function action_getOwners() {
        $this->getUsers(1);
    }

    public function action_getClients() {
        $this->getUsers(array(0, 1));
    }

    public function getUsers($type) {
        $params = $this->request->param();
        $model = ORM::factory('user');
        if(is_array($type)) {
            $operator = 'IN';
        } else {
            $operator = '=';
        }

        $currentBar = Request::factory('bars/getDefaultBarId')->execute()->body();
        $currentBar = json_decode($currentBar);

        $users = $model
                ->where('type', $operator, $type)
                ->and_where('bar_id', '=', $currentBar->data)
                ->limit($params['limit'])
                ->offset($params['limit'] * ($params['page'] - 1))
                ->order_by('id', 'DESC')
                ->find_all();

        $modelNum = ORM::factory('user');
        $usersNum = $modelNum
                    ->where('type', $operator, $type)
                    ->and_where('bar_id', '=', $currentBar->data)
                    ->find_all()
                    ->as_array();
        $num = count($usersNum);

        $response = array();
        foreach($users as $key => $user) {
            // Считаем по транзакциям, сколько пришло и сколько ушло
            $moneys = DB::query(Database::SELECT, 'SELECT
                                                      (SELECT SUM(money) FROM transactions WHERE user_id = '.$user->id.' AND type = 0) AS money_out,
                                                      (SELECT SUM(money) FROM transactions WHERE user_id = '.$user->id.' AND type = 1) AS money_in');

            $result = $moneys->execute()->as_array();
            // Подсчитаем чистую прибыль для пользователя
            $cleanProfit = Request::factory('transactions/getCleanProfit/'.$user->id)->execute()->body();
            // Заказы
            $orders = Request::factory('orders/getOrders/2/'.$user->id.'/100/1')
                        ->execute()
                        ->body();
            $orders = json_decode($orders);
            // Группируем заказы по наименованию
            $ordersGrouped = array();
            if(count($orders->data) > 0) {
                foreach($orders->data as $key => $order) {
                    //var_dump($order);
                    if(!isset($ordersGrouped[(string)$order->coctail_id])) {
                        $ordersGrouped[(string)$order->coctail_id] = array('coctail_name' => $order->coctail_name,
                                                                           'coctail_id' => $order->coctail_id,
                                                                           'price' => $order->price_full / $order->quantity,
                                                                           'priced' => $order->price_full,
                                                                           'quantity' => $order->quantity);
                    } else {
                        $ordersGrouped[(string)$order->coctail_id]['priced'] += $order->price_full;
                        $ordersGrouped[(string)$order->coctail_id]['quantity'] += $order->quantity;
                    }
                }
            }
            // Выясняем ссылку на аватар: линковка к соникмиру
            $avatarLink = '';
            $iter = 0;
            foreach($this->fileTypes as $key => $val) {
                $avatarLink = $this->domain.$this->avatarPath.$this->avatarPrefix.$user->profile_id.'.'.$val;
              /*  if(@fopen($avatarLink, 'r') == true) {
                    break;
                } elseif($iter == count($this->fileTypes) - 1) {
                    $avatarLink = '';
                } */
                $iter++;
            }
           // var_dump($ordersGrouped);
            $response[] = array('id' => $user->id,
                                'nick' => $user->nick,
                                'email' => $user->email,
                                'orders' => $ordersGrouped,
                                'clean_profit' => $cleanProfit,
                                'moneyIn' => round($result[0]['money_in'], 2),
                                'moneyOut' => round($result[0]['money_out'], 2),
                                'difference' => round($user->bill, 2),
                                'profileId' => $user->profile_id,
                                'avatar' => $avatarLink);
        }

        $this->makeResponse(array('success' => true,
                                  'data' => $response,
                                  'total' => $num));
    }
    public function action_delUsers() {
        $params = $this->request->param();

        if(isset($params['ids']) && $params['ids'] == '') {
            return;
        }
        $ids = json_decode($params['ids']);
        $users = ORM::factory('user')
            ->where('id', 'IN', $ids)
            ->find_all();
        $num = 0;
        foreach($users as $user) {
            $user->delete();
            $num++;
        }
        $this->makeResponse(array('success' => true,
                                  'data' => 'Успешно удалено '.$num.' пользователей'));
    }
}