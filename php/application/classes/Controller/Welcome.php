<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller {

	public function action_index()
	{
        $a = Request::accept_type();
		var_dump($a);
        $this->response->body('hello, world!');
	}

} // End Welcome
