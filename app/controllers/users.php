<?php
class Users extends Controller {

public function __construct(){  


} 

public function register(){
//check for post
if($_SERVER['REQUEST_METHOD']=='POST'){

  $_POST=filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
  
  $data=[
    'name'=>trim($_POST['name']),
    'email'=>trim($_POST['email']),
    'password'=>trim($_POST['password']),
    'confirm_password' =>trim($_POST['confirm_password']),
    'name_err'=>'',
    'email_err'=>'',
    'password_err'=>'',
    'confirm_password_err'=>'',
  ];


} else {
  //Load
  
}
  $data=[
    'name'=>'',
    'email'=>'',
    'password'=>'',
    'confirm_password' =>'',
    'name_err'=>'',
    'email_err'=>'',
    'password_err'=>'',
    'confirm_password_err'=>'',
  ];

  $this->view('users/register', $data);

} 



public function index(){
 
  

  $data = ['title'=>'Register'
  ];

  $this->view('pages/index', $data);
}



}
