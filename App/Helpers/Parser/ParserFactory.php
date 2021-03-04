<?php


class ParserFactory
{
    //Each domain has a corresponding class to retrieve data
       static $domainToClass = [ 
            'vnexpress.net' => 'VNexpressParser',
            'dantri.com.vn'=>'DanTriParser',
            'vietnamnet.vn'=>'VietNamNetParser'
        ];
    static function getParserInstance($domain,$url)
    {
            if  (isset( self::$domainToClass[$domain])) 
            return new self::$domainToClass[$domain]($url);
            return "";
    }


}

?>