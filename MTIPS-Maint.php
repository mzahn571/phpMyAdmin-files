<?php

require_once('../db_config.php');

$query = "SELECT * FROM `agencies` WHERE `Agency` LIKE '%MTIPS%' AND `POC Type` LIKE 'Maintenance & Outage Notifications' GROUP BY `Email Address` ORDER BY 'Agency'";

$results = $db_connection->query($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Customer List</title>
</head>
<body>
  <div class="container">
    <table class='table'>
      <thead>
        <tr>
          <th>MTIPS Maintenance & Outage Notifications</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach($results as $result){
        ?>
          <tr>
			<td><?php echo $result['Email Address']?></td>
          </tr>
        <?php 
        }
        ?>

      </tbody>
    </table>
  </div>
</body>
</html>