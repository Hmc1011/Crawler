<?php
/*
Here,this class will set attributes which is regex strings 
and construct method will extract to variables for the Parser
*/

class VietNamNetParser extends Parser{
    public $att=[
        'titleRegex'=>'/<h1.*class=\"title.*\">(.*)<\/h1>/',
        'dateRegex'=> '/class="ArticleDate">(.*)<\/span><\/div><div id=\"ArticleContent/s',
        'contentRegex'=>'/id=\"ArticleHolder\" class=\" clearfix  m-t-20\">(.*)<\/div><div class="fmsSurvey/s'
    ];
    function __construct($url)
    {
        $this->content= Facade::getHtmlByCurl($url);
        foreach ($this->att as $key=>$value )
            $this->{$key}=$value;
    }
}
?>