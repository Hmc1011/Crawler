<?php
class DantriParser extends Parser{
    public $att=[
        'titleRegex'=>'/<h1 class=\"dt-news__title\">(.*)<\/h1>/s',
        'dateRegex'=> '/<span.*class=\"dt\-news__time\">(.*)<\/span>/',
        'contentRegex'=>'/<article class=\"dt-news__detail\">(.*)<\/article>/s'
    ];

    function __construct($url)
    {
        $this->content= (new Curl\Curl($url))->getHtml() ;
        foreach ($this->att as $key=>$value )
            $this->{$key}=$value;
    }
}
?>



