<?php

  require("dbconnection.php");

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // if The food item is existing already, don't create a new one
    if ($_POST['newOrExisting'] == "existing") {
      // insert food into meal
    } else {
      
      $sql = "INSERT INTO Foods ";
      $sql .= "(FoodName, GramsPerServing, CaloriesPerGram) ";
      $sql .= "VALUES (";
      $sql .= "'" . $_POST['foodName'] . "',";
      $sql .= $_POST['gramsPerCalorie'] . ",";
      $sql .= $_POST['gramsPerServing'];
      $sql .= ")";
      $result = mysqli_query($conn, $sql);

      if($result) {
          // Successful insertion;
      } else {
          echo mysqli_error($conn);
          db_disconnect($conn);
          exit;
      }

    }
  }
  // send user to appropriate page
  header("Location: ../index.php");
?>