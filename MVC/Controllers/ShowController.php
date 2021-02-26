<?php

class ShowController
{ 
    static $allArticle;
    public function doAction()
    {
        $servername = "localhost";
        $username = "root";
        $password = "Hoangminhc0ng@1";
        $dbname = "task1";
        $db = new DB($servername, $username, $password, $dbname);
        $this::$allArticle= $db->getAllArticle();
        //Call view of controller
        require_once './MVC/Views/show.php';
    }
}
