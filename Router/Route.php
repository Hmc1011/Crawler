<?php
class Route {
    public static function routeToController(){
       $uri= $_SERVER['REQUEST_URI'];
       $path= parse_url($uri,PHP_URL_PATH);
   

       if  ($path=='/') $controller= 'Index';
       else $controller= ucfirst(preg_replace('/^\//','',$path));

           $classController = $controller.'Controller';
           require_once './MVC/Controllers/'.$classController.'.php';
           (new $classController )->doAction();

    }

}