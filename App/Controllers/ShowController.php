<?php

class ShowController
{ 
    static $allArticle;
    public function doAction()
    {
             
        $servername = getenv("servername");
        $username = getenv("username");
        $password = getenv("password");
        $dbname = getenv("dbname");
        $db = new Article($servername, $username, $password, $dbname);
        $this::$allArticle= $db->getAllArticle();
        //Call view of controller
        require_once './App/Views/show.php';
    }
}
