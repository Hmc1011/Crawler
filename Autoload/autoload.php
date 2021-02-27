<?php
function autoload()
{

    require_once './Helpers/Curl/Curl.php';
    require_once './Router/Route.php';
    require_once './MVC/Controllers/IndexController.php';
    require_once './Helpers/Parser/Base/Parser.php';
    require_once './Helpers/Parser/DanTriParser.php';
    require_once './Helpers/Parser/VietNamNetParser.php';
    require_once './Helpers/Parser/VNexpressParser.php';
    require_once './MVC/Models/Article.php';
    
}

spl_autoload_register('autoload');

?>