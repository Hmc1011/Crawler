<?php
/*
Here, data is stored in static var $allArticle to pass to view Show
*/

class ShowController
{
    static $allArticle, $error;
    public function doAction()
    {
        try {

            $servername = getenv('servername');
            $username = getenv("username");
            $password = getenv("password");
            $dbname = getenv("dbname");
            $db = new Article($servername, $username, $password, $dbname);


            $this::$allArticle = $db->getAllArticle();
            //Call view of controller
            
        } catch (Exception $e) {
            $this->error = $e->getMessage();
        }
        require_once './App/Views/show.php';
    }
}
