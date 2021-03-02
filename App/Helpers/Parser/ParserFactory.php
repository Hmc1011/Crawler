<?php
class ParserFactory
{
    static $domainToClass = [ 
        'vnexpress.net' => 'VNexpressParser',
        'dantri.com.vn'=>'DanTriParser',
        'vietnamnet.vn'=>'VietNamNetParser'
    ];
    static function getParserInstance($domain,$url)
    {
    
        return new $this::$domainToClass[$domain]($url);

    }


}

?>