<?php
namespace Curl;

class Curl{
    public $html,$url;

    function __construct($url)
    {
            $this->url = $url;
    }
    
    public function getHtml()
    {
        $curl = curl_init();
        $options =array(
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_URL => $this->url,
            CURLOPT_USERAGENT => "Mozilla/4.0 (compatible; MSIE 5.01; Windows NT 5.0)",
         );
        curl_setopt_array($curl, $options);
        $this->html= curl_exec($curl);
        return $this->html;

    }
}

?>