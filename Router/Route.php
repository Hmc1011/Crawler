<?php
class Route {
    public static function routeToController(){
       $uri= $_SERVER['REQUEST_URI'];
       $path= parse_url($uri,PHP_URL_PATH);
        //path is controller's name

       if  ($path=='/') $controller= 'Index';
       else $controller= ucfirst(preg_replace('/^\//','',$path));
        
           $classController = $controller.'Controller';
           //here i call corresponding controller from route
           require_once './App/Controllers/'.$classController.'.php';
           (new $classController )->doAction();


    }

}