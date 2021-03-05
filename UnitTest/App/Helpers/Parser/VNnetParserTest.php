<?php

use Mockery\Adapter\Phpunit\MockeryTestCase;

class VNnetParserTest extends MockeryTestCase
    {
        function dataTitle()
        {
            return ['empty url'=>[' ',''],
                    'special url'=>['',''],
                    'correct url'=>['https://vietnamnet.vn/vn/doi-song/gioi-tre/tung-bi-che-la-ga-con-9x-lam-duoc-dieu-boxing-viet-nam-cho-doi-suot-32-nam-716932.html?vnn_source=trangchu&vnn_medium=moinong2','Từng bị chê là ‘gà con’, 9X làm được điều boxing Việt Nam chờ đợi suốt 32 năm']
        ];
        }
        /**
         * @dataProvider dataTitle
         */
        function testVNnetParserGetTitle($url,$expect){
            $VNnetParser = new VietNamNetParser($url);
            $title= trim(preg_replace(['/\n/','/\r/','/\t/','/\f/'],'',$VNnetParser->getTitle()));
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
            $content=trim(preg_replace(['/\n/','/\r/','/\t/','/\f/'],'',$VNnetParser->getContent()));
            $this->assertEquals($expect,$content);
        }

        function dataDate()
        {
            return ['empty url'=>[' ',''],
                    'special url'=>['',''],
                    'correct url'=>['https://vietnamnet.vn/vn/doi-song/gioi-tre/tung-bi-che-la-ga-con-9x-lam-duoc-dieu-boxing-viet-nam-cho-doi-suot-32-nam-716932.html?vnn_source=trangchu&vnn_medium=moinong2','05/03/2021    05:02 GMT+7']

        ];
        }
        /**
         * @dataProvider dataDate
         */
        
        function testVNnetParserGetDate($url,$expect){
            $VNnetParser = new  VietNamNetParser($url);
            $date= trim(preg_replace(['/\n/','/\r/','/\t/','/\f/'],'',$VNnetParser->getDate()));
            $date= str_replace('&nbsp;',' ',htmlentities( preg_replace('/ +/',' ',$date)));
            $date= html_entity_decode($date);
            $this->assertEquals($expect,$date);
            
        }
       
    }

?>