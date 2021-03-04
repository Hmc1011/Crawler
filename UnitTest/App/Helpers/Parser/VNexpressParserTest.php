<?php

use Mockery\Adapter\Phpunit\MockeryTestCase;

class VNexpressParserTest extends MockeryTestCase
    {
        function dataTitle()
        {
            return ['empty url'=>[' ',''],
                    'special url'=>['"as----d"','']
        ];
        }
        /**
         * @dataProvider dataTitle
         */
        function testVNexpressParserGetTitle($url,$expect){
            $VNexpressParser = new VNexpressParser($url);
            $title=    $VNexpressParser->getTitle();
            $this->assertEquals($expect,$title);
        }

        function dataContent()
        {
            return ['empty url'=>[' ',''],
                    'special url'=>['"as----d"','']
        ];
        }
        /**
         * @dataProvider dataContent
         */

        function testVNexpressParserGetContent($url,$expect){
            $VNexpressParser = new VNexpressParser($url);
            $content=    $VNexpressParser->getContent();
            $this->assertEquals($expect,$content);
        }


        function dataDate()
        {
            return ['empty url'=>[' ',''],
                    'special url'=>['"as----d"','']
        ];
        }
        /**
         * @dataProvider dataDate
         */
        
        function testVNexpressParserGetDate($url,$expect){
            $VNexpressParser = new VnexpressParser($url);
            $date=    $VNexpressParser->getDate();
            $this->assertEquals($expect,$date);
        }
       
    }

?>