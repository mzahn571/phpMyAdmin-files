<?php

require_once('../db_config.php');

$query = "DELETE FROM teachers
          WHERE id = 2";

if($db_connection->exec($query)){
  echo "success";
} else {
  echo "deletion failed";
}

$db_connection = NULL;