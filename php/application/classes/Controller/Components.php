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
        $currentBar = Request::factory('bars/getDefaultBarId')->execute()->body();
        $currentBar = json_decode($currentBar);
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
        $model->bar_id = $currentBar->data;

        $model->save();

        $this->makeResponse(array('success' => true));
    }

    private function getComponents($type, $ids = array()) {
        $params = $this->request->param();
        $model = ORM::factory('component');
        // По ID...
        $operator = '';

        if(!isset($params['limit']) || $params['limit'] === '') {
            $params['limit'] = 100; // Пока этого хватит
        }
        if(!isset($params['page']) || $params['page'] === '') {
            $params['page'] = 1;
        }

        if(count($ids) > 0) {
            $operator = 'IN';
            $components = $model->where('id', $operator, $ids)->order_by('id', 'DESC')->and_where('disabled', '=', 0)->find_all();
            $componentsNum = count($ids);
        } else { // По типу
            if(is_array($type)) {
                $operator = 'IN';
            } else {
                $operator = '=';
            }

            $currentBar = Request::factory('bars/getDefaultBarId')->execute()->body();
            $currentBar = json_decode($currentBar);

            $components = $model->where('type', $operator, $type)
                ->and_where('disabled', '=', 0)
                ->and_where('bar_id', '=', $currentBar->data)
                ->limit($params['limit'])
                ->offset($params['limit'] * ($params['page'] - 1))
                ->order_by('id', 'DESC')
                ->find_all();

            $modelNum = ORM::factory('component');
            $componentsNum = $modelNum->where('type', $operator, $type)
                ->and_where('disabled', '=', 0)
                ->find_all();
        }

        $response = array();
        foreach($components as $key => $component) {
            $users = ORM::factory('user')->where('id', '=', $component->owner_id)->find_all();
            foreach($users as $user) {
                $nickname = $user->nick;
                $userId = $user->id;
            }
            $response[] = array('id' => $component->id,
                                'capacity' => $component->capacity,
                                'owner' => $nickname,
                                'owner_id' => $userId,
                                'price' => $component->buy_price,
                                'current_capacity' => $component->current_capacity,
                                'name' => $component->name,
                                'type' => $component->type,
                                'strength' => $component->strength);
        }

        $this->makeResponse(array('data' => $response,
                                  'success' => true,
                                  'total' => count($componentsNum)
                            ));
    }

    public function action_getDependences() {
        $params = $this->request->param();

        if(isset($params['ids']) && $params['ids'] != '') {
           $ids = json_decode($params['ids']);
        } else {
            return;
        }

        $idsStr = implode(',', $ids);
        $query = DB::query(Database::SELECT, 'SELECT a.*
                                              FROM coctails a
                                              INNER JOIN coctailscomponents b ON b.coctail_id = a.id
                                              WHERE b.component_id IN('.$idsStr.')');
        $dependences = $query->execute();
        $coctailsNames = array();
        foreach($dependences as $key => $item) {
            if(array_search($item['name'], $coctailsNames) === false) {
                $coctailsNames[] = $item['name'];
            }
        }
        $coctailsNames = implode($coctailsNames, ', ');
        $this->makeResponse(array('success' => true,
                                  'data' => $dependences,
                                  'coctailsNames' => $coctailsNames));
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
            $component->disabled = 1;
            $num++;
        }
        $this->makeResponse(array('success' => true,
                                  'data' => 'Успешно удалено '.$num.' компонентов.'));
    }

    public function action_saveChanges() {
        $params = $this->request->param();
        $newData = json_decode($params['newData']);
        foreach($newData as $key => $component) {
            $model = ORM::factory('component', $component->id);
            $model->name = $component->name;
            $model->capacity = $component->capacity;
            $model->current_capacity = $component->current_capacity;
            $model->owner_id = $component->owner;
            if($model->buy_price != $component->price || $model->strength != $component->strength) {
                $priceOld = $model->buy_price;
                $model->buy_price = $component->price;
                $strengthOld = $model->strength;
                $model->strength = $component->strength;
                // Найдём коктейли для компонента
                $coctails = Request::factory('coctails/getCoctailsByComponent/'.$component->id)->execute()->body();
                $coctails = json_decode($coctails);

                foreach($coctails->data as $index => $coctail) {
                    // Посчитаем крепость для старого и для нового компонента в напитке.
                    $alcoCapacityNew = $component->strength * $coctail->c_capacity / 100;
                    $alcoCapacityOld = $strengthOld * $coctail->c_capacity / 100;
                    $modelCoctail = ORM::factory('coctail', $coctail->id);
                    $modelCoctail->strength += $alcoCapacityNew - $alcoCapacityOld;
                    // Алко и неалко учитывается в стоимости
                    if(array_search($model->type, array(0, 1)) !== false) {
                        $priceOldClean = $priceOld * $coctail->c_capacity / $component->capacity;
                        $priceOld = $priceOldClean * (1 + $coctail->profit_prozent / 100);
                        $priceNewClean = $component->price * $coctail->c_capacity / $component->capacity;
                        $priceNew = $priceNewClean * (1 + $coctail->profit_prozent / 100);
                        $modelCoctail->price_clean += round($priceNewClean - $priceOldClean, 2);
                        $modelCoctail->price += round($priceNew - $priceOld, 2);
                    }
                    $modelCoctail->save();
                }
            }
            $model->save();
        }
        $this->makeResponse(array('success' => true,
                                  'data' => 'Данные успешно сохранены.'));
    }

    public function action_moveToBar() {
        $params = $this->request->param();
        $newData = json_decode($params['newData']);
        $to = $params['to'];

        $ids = json_decode($params['ids']);
        $idsStr = implode(',', $ids);

        $query = DB::query(Database::SELECT, 'SELECT a.*
                                              FROM components a
                                              WHERE a.id IN('.$idsStr.')');
        $components = $query->execute();

        foreach($components as $key => $component) {
            $model = ORM::factory('component');
            $model->name = $component['name'];
            $model->capacity = $component['capacity'];
            $model->current_capacity = $component['current_capacity'];
            $model->buy_price = $component['buy_price'];
            $model->strength = $component['strength'];
            $model->type = $component['type'];
            $model->disabled = $component['disabled'];
            $model->owner_id = -1; // Неизвестный владелец
            $model->bar_id = $to;
            $model->save();
        }

        $this->makeResponse(array('success' => true,
                                  'data' => 'Компоненты успешно перенесены.'));
    }
}