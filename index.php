<?php
require_once './Helpers/Curl/Curl.php';
use curl;

$k= new curl('https://vnexpress.net/');
var_dump( $k::$html);

?>