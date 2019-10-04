<?php

require_once('../db_config.php');

$query = "SELECT * FROM books";

$results = $db_connection->query($query);



?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>List of Books</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <table class='table'>
      <thead>
        <tr>
          <th>ID</th>
          <th>TITLE</th>
          <th>AUTHOR</th>
          <th>GENRE</th>
          <th>HEIGHT</th>
          <th>PUBLISHER</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach($results as $result){
        ?>
          <tr>
            <td><?php echo $result['id']?></td>
            <td><?php echo $result['title']?></td>
            <td><?php echo $result['author']?></td>
            <td><?php echo $result['genre']?></td>
            <td><?php echo $result['height']?></td>
            <td><?php echo $result['publisher']?></td>
          </tr>
        <?php 
        }
        ?>

      </tbody>
    </table>
  </div>
</body>
</html>