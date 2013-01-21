<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Extendcontroller extends Controller {
    public function makeResponse($data, $coded = true) {
        $view = View::factory('default');
        $view->response = $coded ? json_encode($data) : $data;
        $view->render();

        $this->response->body($view);
    }

}