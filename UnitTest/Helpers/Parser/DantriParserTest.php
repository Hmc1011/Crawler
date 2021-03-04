<?php

use Mockery\Adapter\Phpunit\MockeryTestCase;

class DanTriParserTest extends MockeryTestCase
    {
        function dataTitle()
        {
            return ['empty url'=>[' ',''],
                    'special url'=>['as----d','']
        ];
        }
        /**
         * @dataProvider dataTitle
         */
        function testDantriParserGetTitle($url,$expect){
            $danTriParser = new DantriParser($url);
            $title=    $danTriParser->getTitle();
            $this->assertEquals($expect,$title);
        }
        function dataContent()
        {
            return ['empty url'=>[' ',''],
                    'special url'=>['as----d','']
        ];
        }
        /**
         * @dataProvider dataContent
         */

        function testDantriParserGetContent($url,$expect){
            $danTriParser = new DantriParser($url);
            $content=    $danTriParser->getContent();
            $this->assertEquals($expect,$content);
        }

    function dataDate()
        {
            return ['empty url'=>[' ',''],
                    'special url'=>['as----d','']
        ];
        }
          /**
         * @dataProvider dataDate
         */
        
        function testDantriParserGetDate($url,$expect){
            $danTriParser = new DantriParser($url);
            $date=    $danTriParser->getDate();
            $this->assertEquals($expect,$date);
        }
       
    }

?>