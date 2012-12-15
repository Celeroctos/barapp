<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Users extends Controller {

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
            $response[] = array('id' => $user->id,
                'nick' => $user->nick,
                'email' => $user->email);
        }

        $this->makeResponse($response);
    }

    public function makeResponse($data) {
        $view = View::factory('default');
        $view->response = json_encode($data);
        $view->render();

        $this->response->body($view);
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