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
        function testDantriParserGetTitle($url,$expect){
            $danTriParser = new VietNamNetParser($url);
            $title=    $danTriParser->getTitle();
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

        function testDantriParserGetContent($url,$expect){
            $danTriParser = new VietNamNetParser($url);
            $content=    $danTriParser->getContent();
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
        
        function testDantriParserGetDate($url,$expect){
            $danTriParser = new  VietNamNetParser($url);
            $date=    $danTriParser->getDate();
            $this->assertEquals($expect,$date);
        }
       
    }

?>