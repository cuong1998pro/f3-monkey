<?php 
require_once("../app/config/config.php");
require_once("helper.php");
require_once("session.php");

spl_autoload_register( function($className){
    require_once('libraries/'.$className.".php");
});