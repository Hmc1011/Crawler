<?php
class VNexpressParser extends Parser{
    public $att=[
        'titleRegex'=>'/<h1.*class=\"title\-detail\">(.*)<\/h1>/',
        'dateRegex'=> '/<span.*class=\"date\">(.*)<\/span>/',
        'contentRegex'=>'/<article.*fck_detail \">(.*)<\/article>/s'
    ];

    function __construct($url)
    {
        $this->content= (new Curl\Curl($url))->getHtml() ;
        foreach ($this->att as $key=>$value )
            $this->{$key}=$value;
    }
}
?>