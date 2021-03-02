<?php
class Route {
    private static $instances = [];
    protected function __construct()
    {

    }
    protected function __clone() { }
    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize a singleton.");
    }
    public static function getInstance(): Route
    {
        $cls = static::class;
        if (!isset(self::$instances[$cls])) {
            self::$instances[$cls] = new static();
        }

        return self::$instances[$cls];
    }

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