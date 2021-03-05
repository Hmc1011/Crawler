<?php

use PHPUnit\Framework\TestCase;

class ArticleTest extends TestCase
{
    public $servername,$username,$password,$dbname;

    function setUp():void
    {
        $this->servername = 'localhost';
        $this->username = "root";
        $this->password = "Hoangminhc0ng@1";
        $this->dbname = "task";
    }
    function correctInfoDatabase(){
        return [
            ['localhost','root','Hoangminhc0ng@1','task1']
        ];
    }
    /**
     * @dataProvider correctInfoDatabase
     */
    function testContructWithCorrectInfo($servername,$username,$password,$dbname)
    {
        $this->addToAssertionCount(1);
        $ar= new Article($servername,$username,$password,$dbname); 
        $this->assertTrue(true);
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