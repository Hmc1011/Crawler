<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>show all article</title>
</head>
<body>

<h1>
        <a href="/">Home</a> <br>
  </h1>


    <?php
    if  (!empty(ShowController::$error)) echo "<h1>".ShowController::$error."</h1>";
    else
    foreach (ShowController::$allArticle as $item)
    {
    ?>
  <p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample<?php echo $item['id'] ?>" role="button" aria-expanded="false" aria-controls="collapseExample">
    <?php echo $item['title'] ?>
  </a>
  </p>
 
<div class="collapse" id="collapseExample<?php echo $item['id'] ?>">
  <div class="card card-body">
  <?php
    echo "<b>".$item['date']."</b><br>";
    echo $item['content'];
  
  ?>
  </div>
</div>

 <?php
    }  
 ?>
</body>
</html>