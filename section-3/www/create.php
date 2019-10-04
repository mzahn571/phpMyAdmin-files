<?php

require_once('../db_config.php');

$query = "INSERT INTO teachers (id, firstName, surname, dob, email, startDate)
          VALUES (NULL, 'James', 'Jones', '1988-11-11', 'james@myschool.com', '2009-09-09')";

if($db_connection->exec($query)){
  echo "success";
} else {
  echo "failed";
}


$db_connection = NULL;