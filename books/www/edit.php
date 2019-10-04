<?php

require_once('../db_config.php');
$id = $_GET['id'];
echo "<h1>YOU SELECTED ID: ".$id;
// if($id = $_GET['id']){
//   $query = "SELECT * FROM books WHERE id = $id";
// //   $results = $db_connection->query($query);
// //   foreach($results as $result){
// //     echo $result['title'];
// //   }
//   $result = $db_connection->prepare($query);
//   $result->execute();
//   $result = $result->fetch(PDO::FETCH_OBJ);
//   echo "<pre>";
//   print_r($result);
//   echo "<br>";
//   echo $result->title;
// } else {
//   echo "no ID has been found";
// }

