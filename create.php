<?php

require_once('../db_config.php')

//retrieve the results
$query = "SELECT * FROM agencies";
$results = $db_connection->query($query);

//close the database connection
$db_connection = NULL;

//loop through the results and print the first name
foreach ($results as $result){
    echo $result['Agencies'];
    echo "<br>";
}
