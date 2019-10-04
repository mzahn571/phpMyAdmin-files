<?php

require_once('../db_config.php');

//$query = "SELECT * FROM `agencies` WHERE `Agency` LIKE '%E3A%' AND `POC Type` LIKE 'Maintenance & Outage Notifications' GROUP BY `Email Address` ORDER BY 'Agency'";
//$query = "SELECT * FROM `agencies` WHERE `Agency` LIKE '%E3A%' AND `Services` LIKE 'DNS' AND `POC Type` LIKE 'Maintenance & Outage Notifications' GROUP BY `Email Address` ORDER BY 'Agency'"; 
$query = "SELECT * FROM `agencies` WHERE `Agency` LIKE '%MTIPS%' AND `Services` LIKE 'SMTP' AND `POC Type` LIKE '%Maintenance & Outage Notifications %' GROUP BY `Email Address` ORDER BY 'Agency'";

$results = $db_connection->query($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Customer List</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <table class='table'>
      <thead>
        <tr>
          <th>AGENCIES</th>
		  <th>SERVICES</th>
          <th>POC TYPE</th>
          <th>EMAIL</th>
        </tr>
      </thead>
      <tbody>
        <?php
        foreach($results as $result){
        ?>
          <tr>
            <td><?php echo $result['Agency']?></td>
			<td><?php echo $result['Services']?></td>
            <td><?php echo $result['POC Type']?></td>
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