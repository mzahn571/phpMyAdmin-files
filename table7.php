<?php

require_once('../db_config.php');

$query = "SELECT * FROM `agencies` WHERE `POC Type` LIKE 'Maintenance & Outage Notifications' ";

$results = $db_connection->query($query);

foreach($results as $result){
        
	echo $result['Email Address'];
	echo "<br>";
	     
        
//close the database connection
$db_connection = NULL;