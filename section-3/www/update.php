<?php

require_once('../db_config.php');

$query = "UPDATE teachers
          SET firstName = 'Sam', surname = 'Jones'
          WHERE id = 82";

if($db_connection->exec($query)){
  echo "success";
} else {
  echo "update failed";
}

$db_connection = NULL;