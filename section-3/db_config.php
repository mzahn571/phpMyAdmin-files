<?php

$db_host = 'localhost';
$db_name = 'database-name-goes-here';
$db_username = 'username-goes-here';
$db_password = 'password-goes-here';

$dsn = "mysql:host=$db_host;dbname=$db_name";

try {
  $db_connection = new PDO($dsn, $db_username, $db_password);
} catch (Exception $e) {
  echo "there was a failure - " . $e->getMessage();  
}