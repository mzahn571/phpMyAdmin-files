<?php

require_once('../db_config.php');

$query = "UPDATE books
          SET title = 'Another Book', genre = 'Comedy'
          WHERE id = 118";

if($db_connection->exec($query)){
  echo "success";
} else {
  echo "update failed";
}

$db_connection = NULL;