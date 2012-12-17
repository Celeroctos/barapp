<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Extendcontroller extends Controller {

    public function makeResponse($data) {
        $view = View::factory('default');
        $view->response = json_encode($data);
        $view->render();

        $this->response->body($view);
    }

}