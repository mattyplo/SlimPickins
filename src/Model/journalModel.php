<?php
  require("../Controller/dbConnection.php");

  $sql = "SELECT * FROM Meals ";
  $sql .= "WHERE UserID = 2";
  $userMeals = mysqli_query($conn, $sql);
  







?>