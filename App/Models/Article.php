<?php
/*
Table Article contains all the stored articles
*/


class Article
{
    private $conn;
    function __construct($servername, $username, $password, $dbname)
    {

        // Create connection
        try{
            $conn = new mysqli($servername, $username, $password, $dbname);
            $this->conn = $conn;
        }
        catch (Exception $e){
            throw new Exception();
        }
    }
    function store($date, $title, $content, $table)
    {

        $date = $this->conn->real_escape_string(trim($date));
        $title = $this->conn->real_escape_string(trim($title));
        $content = $this->conn->real_escape_string(trim($content));

        $sql = "INSERT INTO `$table` (`date`,`title`,`content`)
        VALUES ('$date','$title','$content')";

        if ($this->conn->query($sql) === TRUE) {
        } else {
            throw new Exception($this->conn->error);
        }
    }
    function getAllArticle()
    {
        try{

            $outResult = [];
            $sql = "SELECT `id`,`title`,`date`,`content` FROM `article`";
        $result = $this->conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                $outResult[] = ['id' => $row['id'], 'title' => $row['title'], 'date' => $row['date'], 'content' => $row['content']];
            }
        }
         }
          catch (Exception $e){
              throw new Exception('Can get all articles');
          }
        return $outResult;
    }

    function __destruct()
    {
        $this->conn->close();
    }
}
