<?php
/*
  All request through htaccess route here
  and
*/


ini_set('display_startup_errors', 1);
ini_set('display_errors', 1);
error_reporting(-1);


// The argument specifies the directory where the ".env" file is located 
require_once  './vendor/autoload.php' ;

$dotenv = Dotenv\Dotenv::createUnsafeImmutable(__DIR__);
$dotenv->load();
  Route::routeToController(); //the request will go from the route to the controller
  
?>