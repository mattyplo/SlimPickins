<?php

require("dbConnection.php");

function insertFoodItem($foodItem) {
  
  // use global to use variable names that are outside of function scope
  global $conn;
  
  $sql = "INSERT INTO Foods ";
  $sql .= "(FoodName, GramsPerServing, CaloriesPerGram) ";
  $sql .= "VALUES (";
  $sql .= "'" . $foodItem['foodName'] . "',";
  $sql .= $foodItem['gramsPerCalorie'] . ",";
  $sql .= $foodItem['gramsPerServing'];
  $sql .= ")";
  mysqli_query($conn, $sql);
  
}






?>