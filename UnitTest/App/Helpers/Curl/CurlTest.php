<?php

use Curl\Curl;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertTrue;

class CurlTest extends TestCase
{

    function dataTest()
    {
        return [
            'fail url' => ['cosng.vn', false],
            'correct url' => ['https://enmota.com/thong-nao-kien-thuc-ve-tu-loai-tieng-anh-cho-nguoi-moi-hoc-danh-tu-dong-tu-tinh-tu/#:~:text=T%E1%BB%AB%20lo%E1%BA%A1i%20Ti%E1%BA%BFng%20Anh%20g%E1%BB%93m,n%C4%83ng%20ri%C3%AAng%20bi%E1%BB%87t%20trong%20c%C3%A2u.', true]
        ];
    }
    /**
     * @dataProvider dataTest
     */
    function testCurlWithUrl($url, $expect)
    {
        $curl = new Curl($url);
        $this->assertEquals($expect, boolval($curl->getHtml()));
    }
}
