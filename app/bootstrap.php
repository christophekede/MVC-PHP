<?php
//Load config
require_once 'config/config.php';
require_once 'helpers/functions.php';
//Autoload Core libraries

spl_autoload_register(function($className){
require 'libraries/'.$className.'.php';
});

$init = new Core;