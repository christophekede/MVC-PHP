<?php
/**
 * Base Controller
 * Loads models and views
 */

 class Controller {
    //Load model
    public function model($model){
      //require model file
      require_once APPROOT.'/models/'.$model.'.php';

      //instatiatte $model
      return new $model();
    }

    //Load view
    public function view($view, $data = []){
      
      if(file_exists(APPROOT.'/views/'.$view.'.php')){
        require_once APPROOT.'/views/'.$view.'.php';
      } else {
          die('View does not exist');
      }


    }

 }