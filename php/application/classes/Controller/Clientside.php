<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Clientside extends Controller_Extendcontroller {
    public function action_getInterface() {
        $view = View::factory('clientside');
        $view->render();
        $this->response->body($view);
    }

}