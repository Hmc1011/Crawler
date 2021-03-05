<?php

use Mockery\Adapter\Phpunit\MockeryTestCase;

class VNexpressParserTest extends MockeryTestCase
    {
        function dataTitle()
        {
            return ['empty url'=>[' ',''],
                    'special url'=>['"as----d"',''],
                    'correct url'=>['https://vnexpress.net/ngay-8-3-bat-dau-tiem-vaccine-covid-19-tai-viet-nam-4243903.html','Ngày 8/3 bắt đầu tiêm vaccine Covid-19 tại Việt Nam']

        ];
        }
        /**
         * @dataProvider dataTitle
         */
        function testVNexpressParserGetTitle($url,$expect){
            $VNexpressParser = new VNexpressParser($url);
            $title= trim(preg_replace(['/\n/','/\r/','/\t/','/\f/'],'',$VNexpressParser->getTitle()));
            $this->assertEquals($expect,$title);
        }

        function dataContent()
        {
            return ['empty url'=>[' ',''],
                    'special url'=>['"as----d"',''],
        ];
        }
        /**
         * @dataProvider dataContent
         */

        function testVNexpressParserGetContent($url,$expect){
            $VNexpressParser = new VNexpressParser($url);
            $content= trim(preg_replace(['/\n/','/\r/','/\t/','/\f/'],'',$VNexpressParser->getContent()));
            $this->assertEquals($expect,$content);
        }


        function dataDate()
        {
            return ['empty url'=>[' ',''],
                    'special url'=>['"as----d"',''],
                    'correct url'=>['https://vnexpress.net/ngay-8-3-bat-dau-tiem-vaccine-covid-19-tai-viet-nam-4243903.html','Thứ sáu, 5/3/2021, 10:52 (GMT+7)']
        ];
        }
        /**
         * @dataProvider dataDate
         */
        
        function testVNexpressParserGetDate($url,$expect){
            $VNexpressParser = new VnexpressParser($url);
            $date= trim(preg_replace(['/\n/','/\r/','/\t/','/\f/'],'',$VNexpressParser->getDate()));
            $this->assertEquals($expect,$date);
        }
       
    }

?>