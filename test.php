<?php

require_once('../db_config.php');

$query = "SELECT * FROM customers";

$results = $db_connection->query($query);

foreach($results as $result){
        
    echo $result['Agencies'];
    echo $result['Service'];
    echo $result['POC Type'];
    echo $result['Name'];
	echo $result['Email Address'];
	echo $result['Phone'];
         
        
//close the database connection
$db_connection = NULL;