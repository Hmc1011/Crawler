<?php

class Curl{
    public static $html;

    function __construct($url)
    {
        $this->html= curl_init($url);
    }
}

?>