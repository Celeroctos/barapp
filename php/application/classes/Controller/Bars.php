<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Bars extends Controller_Extendcontroller {
    public function action_getBars() {
        $query = DB::query(Database::SELECT, 'SELECT a.*
                                              FROM bars a');
        $result = $query->execute()->as_array();
        $defaultBar = $this->getDefaultBar();

        foreach($result as &$bar) {
            if($bar['id'] == $defaultBar->data) {
                $bar['isDefault'] = 1;
            } else {
                $bar['isDefault'] = 0;
            }
        }

        $this->makeResponse(array('success' => true,
                                  'data' => $result));
    }

    public function action_addNewBar() {
        $params = $this->request->param();

        $model = ORM::factory('bar');
        $model->name = $params['name'];
        $model->save();

        $this->makeResponse(array('success' => true,
                                  'data' => $model->id));
    }

    public function getDefaultBar() {
        $defaultBar = Request::factory('settings/getSetting/defaultBar')->execute()->body();
        return json_decode($defaultBar);
    }

    public function action_getDefaultBar() {
        $this->makeResponse(array('success' => true,
                                  'data' => $this->getDefaultBar()));
    }

    public function action_getDefaultBarId() {
        $defaultBar = $this->getDefaultBar();
        $this->makeResponse(array('success' => true,
                                  'data' => $defaultBar->data));
    }
}