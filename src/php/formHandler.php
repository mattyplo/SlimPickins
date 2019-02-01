<?php

  require("dbconnection.php");

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      
      $sql = "INSERT INTO Foods ";
      $sql .= "(FoodName, GramsPerServing, CaloriesPerGram) ";
      $sql .= "VALUES (";
      $sql .= "'" . $_POST['foodName'] . "',";
      $sql .= $_POST['gramsPerCalorie'] . ",";
      $sql .= $_POST['gramsPerServing'];
      $sql .= ")";
      $result = mysqli_query($conn, $sql);
      
      if($result) {
          echo("yay");
      } else {
          echo mysqli_error($conn);
          db_disconnect($conn);
          exit;
      }
      
  }

  // send user to appropriate page
  header("Location: ../index.php");
?>