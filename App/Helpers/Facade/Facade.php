<?php

use Curl\Curl;

class Facade{
    static function getHtmlByCurl($url)
    {
       return (new Curl($url))->getHtml();
    }

}
?>