<?php

require_once('../db_config.php');

$query = "DELETE FROM books
          WHERE id = 102";

if($db_connection->exec($query)){
  echo "success";
} else {
  echo "deletion failed";
}

$db_connection = NULL;