<?php
  require('credentials.php');
  
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  /*//Make a SELECT query
  $query = "SELECT * FROM INVENTORY";

  $result = $conn->query($query);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo "actor_id: "
            . $row["WarehouseID"]
            . " - Name: "
            . $row["SKU_Description"]
            . " "
            . $row["QuantityOnHand"]
            . "<br>";
      }
  }*/
?>