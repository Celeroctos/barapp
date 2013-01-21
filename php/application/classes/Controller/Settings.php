<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Settings extends Controller_Extendcontroller {
    private $settings = array();

    public function action_getDefaultBarPanel() {
        $this->getSetting('defaultBarPanel', 1);
    }

    public function action_getSetting() {
        $userId = 1;
        $params = $this->request->param();
        $key = $params['setting'];
        $this->getSetting($params['setting'], $userId);
    }

    public function getSetting($key = false, $userId = false) {

        if(count($this->settings) == 0) {
            $query = DB::query(Database::SELECT, 'SELECT a.*
                                                  FROM settings a
                                                  WHERE a.user_id = '.$userId);
            $result = $query->execute()->as_array();
            foreach($result as $index => $setting) {
                $this->settings[$setting['key']] = $setting['value'];
            }
        }
        //var_dump($result);
        // Если настройки нет для дефолтного юзера, надо настроить
        if(!isset($this->settings[$key])) {
            $value = $this->addSetting($key, $userId);
        } else {
            $value = $this->settings[$key];
        }
        $this->makeResponse(array('success' => true,
                                  'data' => $value));
    }

    public function addSetting($key, $userId) {
        // Дефолтные значения лежат под нулевым юзером в базе
        $query = DB::query(Database::SELECT, 'SELECT a.*
                                              FROM settings a
                                              WHERE a.user_id = 0 AND a.key = "'.$key.'"');
        $result = $query->execute()->as_array();
        $model = ORM::factory('setting');
        $model->user_id = $userId;
        $model->key = $key;
        $model->value = $result[0]['value'];
        $model->save();
        return $result[0]['value'];
    }

    public function action_getDefaultBar() {
        $userId = 1;
        return $this->getSetting('defaultBar', $userId);
    }

    public function action_saveSettings() {
        $params = $this->request->param();
        $params = json_decode($params['newData']);
        $userId = 1;
        foreach($params as $key => $param) {
            $result = ORM::factory('setting')
                     ->where('key', '=', $param->name)
                     ->and_where('user_id', '=', $userId)
                     ->find_all()
                     ->as_array();
            $query = DB::query(Database::UPDATE, 'UPDATE settings a
                                                  SET
                                                    a.value = :value
                                                  WHERE
                                                     a.user_id = :user_id AND
                                                     a.key = :key')
                    ->parameters(array(
                        ':value' => $param->value,
                        ':key' => $param->name,
                        ':user_id' => $userId
                    ))->execute();
        }
        $this->makeResponse(array('success' => true,
                                  'data' => 'Настройки успешно сохранены.'));
    }
}