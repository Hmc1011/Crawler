<?php

use Mockery\Adapter\Phpunit\MockeryTestCase;

class DanTriParserTest extends MockeryTestCase
    {
        function dataProvider()
        {
            return ['empty url'=>[' ',''],
                    'special url'=>['as----d','']
        ];
        }
        /**
         * @dataProvider dataProvider
         */
        function testDantriParserGetTitle($url,$expect){
            $danTriParser = new DantriParser($url);
            $title=    $danTriParser->getTitle();
            $this->assertEquals($expect,$title);
        }
        /**
         * @dataProvider dataProvider
         */

        function testDantriParserGetContent($url,$expect){
            $danTriParser = new DantriParser($url);
            $content=    $danTriParser->getContent();
            $this->assertEquals($expect,$content);
        }

          /**
         * @dataProvider dataProvider
         */
        
        function testDantriParserGetDate($url,$expect){
            $danTriParser = new DantriParser($url);
            $date=    $danTriParser->getDate();
            $this->assertEquals($expect,$date);
        }
       
    }

?>