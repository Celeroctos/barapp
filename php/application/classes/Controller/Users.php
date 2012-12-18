<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Users extends Controller_Extendcontroller {

    public function action_addOwner() {
        $this->addUser(1);
    }

    public function action_addClient() {
        $this->addUser(0);
    }

    public function addUser($type) {
        $params = $this->request->param();
        $model = ORM::factory('user');
        // Пишем нового хозяина бара
        $model->nick = $params['nick'];
        $model->email = $params['email'];
        $model->type = $type; // Хозяин
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
        $model = ORM::factory('user');
        if(is_array($type)) {
            $operator = 'IN';
        } else {
            $operator = '=';
        }
        $users = $model->where('type', $operator, $type)->order_by('id', 'DESC')->find_all();
        $response = array();
        foreach($users as $key => $user) {
            // Считаем по транзакциям, сколько пришло и сколько ушло
            $moneys = DB::query(Database::SELECT, 'SELECT
                                                      (SELECT SUM(money) FROM transactions WHERE user_id = '.$user->id.' AND type = 0) AS money_out,
                                                      (SELECT SUM(money) FROM transactions WHERE user_id = '.$user->id.' AND type = 1) AS money_in');

            $result = $moneys->execute()->as_array();
            // Подсчитаем чистую прибыль для пользователя
            $cleanProfit = Request::factory('transactions/getCleanProfit/'.$user->id)->execute()->body();
            $response[] = array('id' => $user->id,
                                'nick' => $user->nick,
                                'email' => $user->email,
                                'clean_profit' => $cleanProfit,
                                'moneyIn' => round($result[0]['money_in'], 2),
                                'moneyOut' => round($result[0]['money_out'], 2),
                                'difference' => round($result[0]['money_in'] - $result[0]['money_out'], 2));
        }

        $this->makeResponse($response);
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