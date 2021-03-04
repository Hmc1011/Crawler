<?php

use Curl\Curl;
use PHPUnit\Framework\TestCase;

class CurlTest extends TestCase{
    function testCurlWithFailUrl(){
        $curl= new Curl('acnlaksllkc');
        $this->assertFalse($curl->getHtml());
    }

}

?>