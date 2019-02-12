<?php

require("../Controller/dbConnection.php");

function insertFoodItem($foodItem) {
  
  // use global to use variable names that are outside of function scope
  global $conn;
  
  $sql = "INSERT INTO Foods ";
  $sql .= "(FoodName, GramsPerServing, CaloriesPerGram) ";
  $sql .= "VALUES (";
  $sql .= "'" . $foodItem['foodName'] . "',";
  $sql .= $foodItem['caloriesPerGram'] . ",";
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

/***************** MealsFoods Queries *********************/

function insertMealsFoods($data) {
  
  global $conn;
  
  $sql = "INSERT INTO MealsFoods ";
  $sql .= "(MealID, FoodID, GramsConsumed) ";
  $sql .= "VALUES (";
  $sql .= $data['mealID'] . ", ";
  $sql .= $data['foodID'] . ", ";
  $sql .= $data['gramsConsumed'] . ")";
  mysqli_query($conn, $sql);
}

function selectFoodID($mealID) {
  // Currently only returns One, but multiple foods may be stored eventually
  global $conn;
  
  $sql = "SELECT FoodID, GramsConsumed FROM mealsfoods
WHERE MEALID = ";
  $sql .= $mealID;
  $mealFoodsResult = mysqli_query($conn, $sql);
  $mealFoods = mysqli_fetch_row($mealFoodsResult);
  return (int)$mealFoods[0];
  
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

function selectUser($user) {
  
  global $conn;
  
  $sql = "SELECT UserName, `Password` FROM Users WHERE UserName = '";
  $sql .= $user['userName'] . "' ";
  $sql .= "AND ";
  $sql .= "`Password` = '";
  $sql .= $user['password'] . "';";
  return mysqli_query($conn, $sql);

}

function verifyFood($foodItem) {

  global $conn;

  $sqlFoodExist = "SELECT IF(COUNT(FoodName)>0, 'true', 'false') AS isTrue FROM foods WHERE FoodName = '";
  $sqlFoodExist .= $foodItem['foodName']."';";
  return mysqli_query($conn, $sqlFoodExist);
}

function updateFoodItem($foodItem){

  global $conn;

  $sql = "UPDATE foods SET GramPerServing =";
  $sql .= $foodItem['gramsPerServing'].", CaloriesPerGram =";
  $sql .= $foodItem['caloriesPerGram'];
  mysqli_query($conn, $sql);
}

function selectMeals($userID) {
  
  global $conn;
  
  $sql = "SELECT * FROM Meals ";
  $sql .= "WHERE UserID = " . $userID;
  return mysqli_query($conn, $sql);
}

?>