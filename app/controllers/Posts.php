<?php

class Posts extends Controller {

  public function __construct(){
    echo 'Posts loaded';
  } 

  public function index(){
    $data = [
      'pageName' => 'Posts',
      'title'=>'WELCOME'
    ];
    $this->view('pages/index', $data);
  }


  public function edit() {
    echo "méthode edit ";
  }

}

