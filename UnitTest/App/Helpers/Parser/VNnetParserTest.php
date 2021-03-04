<?php

use Mockery\Adapter\Phpunit\MockeryTestCase;

class VNnetParserTest extends MockeryTestCase
    {
        function dataTitle()
        {
            return ['empty url'=>[' ',''],
                    'special url'=>['','']
        ];
        }
        /**
         * @dataProvider dataTitle
         */
        function testVNnetParserGetTitle($url,$expect){
            $VNnetParser = new VietNamNetParser($url);
            $title=    $VNnetParser->getTitle();
            $this->assertEquals($expect,$title);
        }
        function dataContent()
        {
            return ['empty url'=>[' ',''],
                    'special url'=>['','']
        ];
        }
        /**
         * @dataProvider dataContent
         */

        function testVNnetParserGetContent($url,$expect){
            $VNnetParser = new VietNamNetParser($url);
            $content=    $VNnetParser->getContent();
            $this->assertEquals($expect,$content);
        }

        function dataDate()
        {
            return ['empty url'=>[' ',''],
                    'special url'=>['','']
        ];
        }
        /**
         * @dataProvider dataDate
         */
        
        function testVNnetParserGetDate($url,$expect){
            $VNnetParser = new  VietNamNetParser($url);
            $date=    $VNnetParser->getDate();
            $this->assertEquals($expect,$date);
        }
       
    }

?>