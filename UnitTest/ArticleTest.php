<?php

use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
    public $servername,$username,$password,$dbname;

    function setUp():void
    {
        $this->servername = 'servername';
        $this->username = "username";
        $this->password = "password";
        $this->dbname = "dbname";
    }
    function testContructWithFailInfo()
    {
        $this->expectException(Exception::class);
        $ar= new Article($this->servername,$this->username,$this->password,$this->dbname);
    }
    function testStoreWithFailInfo()
    {
        $this->expectException(Exception::class);
        $ar= new Article($this->servername,$this->username,$this->password,$this->dbname);
        $ar->store('1','2','3','4'); //no table 4       
    }
    
}
?>