<?php

class HelloController extends BaseController {
	
	public function index(){
    
    // model
    $user = $this->model('User');

    // make page
    View::make('index', $user);
  }
}