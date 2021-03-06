<?php
class IndexController
{

    public static $title, $content, $date, $url,$error;


    //setData will store data to database and pass value for view Index
    private function setData()
    {

        $url = trim(strtolower($_GET['url'] ?? '')) ?? '';
        if (!empty($url)) {

            $this::$url = $url;
            $domain = trim(parse_url($url, PHP_URL_HOST));
            $data = ParserFactory::getParserInstance($domain, $url);
            if (!empty($data)) {

                $this::$title = $data->getTitle();
                $this::$content = $data->getContent();
                $this::$date = $data->getDate();

                $servername = getenv("servername");
                $username = getenv("username");
                $password = getenv("password");
                $dbname = getenv("dbname");
                    $db = new Article($servername, $username, $password, $dbname);
                    $db->store($this::$date, $this::$title, $this::$content, 'article');
            }
        }
    }

    public function doAction()
    {
        try
        {
            $this->setData();
        }
        catch (Exception $e)
        {
            self::$error= $e->getMessage();
        }
        //Call view of controller
        require_once './App/Views/index.php';
    }
}
