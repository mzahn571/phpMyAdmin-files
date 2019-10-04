<?php

require_once('../db_config.php');

if(!isset($_GET['id'])){
    header('Location: list-books.php');
    die();
  } else {
     $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
    if(!$id){
      header('Location: list-books.php');
      die();
    } else {
        $query = "DELETE FROM books WHERE id=:id LIMIT 1";
        $result = $db_connection->prepare($query);
        $result->execute([
          'id' => $id
        ]);
        $rowsDeleted = $result->rowCount();
        
    }
  }
?>


  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <title>Delete</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

  </head>

  <body>
    <div class="container">
      <?php
      if($rowsDeleted==1){
      ?>
        <div class="alert alert-primary" role="alert">
          Record has been deleted.
        </div>
      <?php
      } else {
        ?>
      <div class="alert alert-primary" role="alert">
          Record has not been deleted.
        </div>
      <?php
        
      }
      
      ?>
      


    </div>
  </body>

  </html>