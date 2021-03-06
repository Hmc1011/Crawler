<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Crawler Utility Library</title>
</head>
<body>    
    <h1>
        <a href="/">Home</a> <br>
        <a href="/show">Show all article </a>
    </h1>
    <form action="">
        <div class="form-group">
          <label for=""> URL: </label>
          <input type="text" name="url" value='<?php echo IndexController::$url;  ?> ' id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <button type="submit" class="btn btn-primary">Get info</button>
    
    </form>


    <?php
        if  (!empty(IndexController::$error)) echo "<h1>".IndexController::$error."</h1>";
        {
            echo "<h1 style='color:blue;'> Title: " . IndexController::$title . ' </h1> <br>';
            echo "<b style='color:red'> Date: </b>" . IndexController::$date . '<br>' ;
            echo "<b style='color:red'> Content: </b>" . IndexController::$content ;
        }

    ?>

</body>
</html>

