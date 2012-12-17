<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Components extends Controller_Extendcontroller {

    public function action_addAlcoComponent() {
        $this->addComponent(0);
    }
    public function action_addNoAlcoComponent() {
        $this->addComponent(1);
    }
    public function action_addInventory() {
        $this->addComponent(2);
    }
    public function action_addOther() {
        $this->addComponent(3);
    }
    public function action_getAlcoComponents() {
        $this->getComponents(0);
    }
    public function action_getNoAlcoComponents() {
        $this->getComponents(1);
    }
    public function action_getInventory() {
        $this->getComponents(2);
    }
    public function action_getOther() {
        $this->getComponents(3);
    }

    public function action_getComponentsById() {
        $components = $this->request->param('components');
        if($components != '') {
            $componentsArr = json_decode($components);
            $ids = array();
            foreach($componentsArr as $component) {
                $ids[] = $component->combo;
            }
            $this->getComponents(array(0, 1, 2, 3), $ids);
        }
    }

    public function action_getAllComponents() {
        $this->getComponents(array(0, 1, 2, 3));
    }

    private function addComponent($type) {
        $params = $this->request->param();
        $model = ORM::factory('component');
        // Пишем новый компонент бара
        $model->name = $params['name'];
        $model->capacity = $params['capacity'];
        $model->type = $type;
        $model->owner_id = $params['owner'];
        $model->current_capacity = $params['capacity'];
        if($params['strength'] != '') {
            $model->strength = $params['strength'];
        }
        $model->buy_price = $params['price'];

        $model->save();

        $this->makeResponse(array('success' => true));
    }

    private function getComponents($type, $ids = array()) {
        $model = ORM::factory('component');
        // По ID...
        $operator = '';
        if(count($ids) > 0) {
            $operator = 'IN';
            $components = $model->where('id', $operator, $ids)->order_by('id', 'DESC')->find_all();

        } else { // По типу
            if(is_array($type)) {
                $operator = 'IN';
            } else {
                $operator = '=';
            }
            $components = $model->where('type', $operator, $type)->order_by('id', 'DESC')->find_all();
        }
        $response = array();
        foreach($components as $key => $component) {
            $users = ORM::factory('user')->where('id', '=', $component->owner_id)->find_all();
            foreach($users as $user) {
                $nickname = $user->nick;
            }
            $response[] = array('id' => $component->id,
                                'capacity' => $component->capacity,
                                'owner' => $nickname,
                                'price' => $component->buy_price,
                                'current_capacity' => $component->current_capacity,
                                'name' => $component->name,
                                'type' => $component->type,
                                'strength' => $component->strength);
        }

        $this->makeResponse($response);
    }

    public function action_delComponents() {
        $params = $this->request->param();

        if(isset($params['ids']) && $params['ids'] == '') {
            return;
        }
        $ids = json_decode($params['ids']);
        $components = ORM::factory('component')
            ->where('id', 'IN', $ids)
            ->find_all();
        $num = 0;
        foreach($components as $component) {
            $component->delete();
            $num++;
        }
        $this->makeResponse(array('success' => true,
                                  'data' => 'Успешно удалено '.$num.' компонентов.'));
    }
}