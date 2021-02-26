<?php
function autoload()
{

    require_once './Helpers/Curl/Curl.php';
    require_once './Router/Route.php';
    require_once './MVC/Controllers/IndexController.php';
    require_once './Parser/VNexpressParser.php';
    require_once './Parser/Base/Parser.php';
    require_once './Helpers/DB/DB.php';
    
}

spl_autoload_register('autoload');

?>