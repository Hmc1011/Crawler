<?php

use Mockery\Adapter\Phpunit\MockeryTestCase;

class DanTriParserTest extends MockeryTestCase
    {
        function dataTitle()
        {
            return ['empty url'=>[' ',''],
                    'special url'=>['as----d',''],
                    'detail url'=>['https://dantri.com.vn/the-thao/clb-giang-to-sup-do-loi-thoat-nao-danh-cho-inter-milan-20210305002748104.htm','CLB Giang Tô sụp đổ, lối thoát nào dành cho Inter Milan?']];
        }
        /**
         * @dataProvider dataTitle
         */
        function testDantriParserGetTitle($url,$expect){
            $danTriParser = new DantriParser($url);
            $title= trim(preg_replace(['/\n/','/\r/','/\t/','/\f/'],'',$danTriParser->getTitle()));
            $expect=trim($expect);
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
            $content= trim(preg_replace(['/\n/','/\r/','/\t/','/\f/'],'',$danTriParser->getContent()));
            $expect=trim($expect);
            $this->assertEquals($expect,$content);
        }

    function dataDate()
        {
            return ['empty url'=>[' ',''],
                    'special url'=>['as----d',''],
                    'correct url'=>['https://dantri.com.vn/the-thao/clb-giang-to-sup-do-loi-thoat-nao-danh-cho-inter-milan-20210305002748104.htm','Thứ sáu, 05/03/2021 - 08:05']
        ];
        }
          /**
         * @dataProvider dataDate
         */
        
        function testDantriParserGetDate($url,$expect){
            $danTriParser = new DantriParser($url);
            $date= trim(preg_replace(['/\n/','/\r/','/\t/','/\f/'],'',$danTriParser->getDate()));
            $expect= trim($expect);
            $this->assertEquals($expect,$date);
        }
       
    }

?>