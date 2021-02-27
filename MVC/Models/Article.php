<?php
class Article
{
    private $conn;
    function __construct($servername, $username, $password, $dbname)
    {

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        };
        echo "Connect success";
        $this->conn = $conn;
    }
    function store($date, $title, $content, $table)
    {

        $date = $this->conn->real_escape_string(trim($date));
        $title = $this->conn->real_escape_string(trim($title));
        $content = $this->conn->real_escape_string(trim($content));

        $sql = "INSERT INTO `$table` (`date`,`title`,`content`)
        VALUES ('$date','$title','$content')";

        if ($this->conn->query($sql) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . $this->conn->error;
        }
    }
    function getAllArticle()
    {
        $outResult=[];
        $sql = "SELECT `id`,`title`,`date`,`content` FROM `article`";
        $result = $this->conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
    $outResult[]= ['id'=>$row['id'], 'title'=>$row['title'], 'date'=>$row['date'],'content'=>$row['content']];
            }
        }
        return $outResult;
    }
    function __destruct()
    {
        $this->conn->close();
    }
}
