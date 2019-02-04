<?php

require("../Controller/dbConnection.php");

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

function insertMeal($meal) {

  global $conn;
  
  $sqlMeal = "INSERT INTO Meals ";
  $sqlMeal .= "(`Date`, MealTypeID, UserID) ";
  $sqlMeal .= "VALUES (";
  $sqlMeal .= "'" . $meal['date'] . "',";
  $sqlMeal .= $meal['mealType'] . ",";
  $sqlMeal .= $meal['userID'];
  $sqlMeal .= ")";
  mysqli_query($conn, $sqlMeal);
 
}

function insertUser($user) {
  
  global $conn;
  
  $sql = "INSERT INTO Users ";
  $sql .="(FirstName, LastName, UserName, Password) ";
  $sql .="VALUES (";
  $sql .="'" . $user['firstName']."',";
  $sql .="'" . $user['lastName'] ."',";
  $sql .="'" . $user['userName'] ."',";
  $sql .="'" . $user['password'] ."'";
  $sql .=")";
  mysqli_query($conn, $sql);
  
}

?>