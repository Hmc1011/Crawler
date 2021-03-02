<?php
/*
Here,this class will set attributes which is regex strings 
and construct method will extract to variables for the Parser
*/
class VNexpressParser extends Parser{
    public $att=[
        'titleRegex'=>'/<h1.*class=\"title\-detail\">(.*)<\/h1>/',
        'dateRegex'=> '/<span.*class=\"date\">(.*)<\/span>/',
        'contentRegex'=>'/<article.*fck_detail \">(.*)<\/article>/s'
    ];

    function __construct($url)
    {
        //get the Html content of given url
        $this->content=  Facade::getHtmlByCurl($url);
        foreach ($this->att as $key=>$value )
            $this->{$key}=$value;
    }
}
?>