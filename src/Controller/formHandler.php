<?php

  require("dbConnection.php");
  require("../Model/queryFunctions.php");

  if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    // create a new meal
    switch ($_POST['meal']) {
    case "breakfast":
        $mealType = 1;
        break;
    case "lunch":
        $mealType = 2;
        break;
    case "dinner":
        $mealType = 3;
        break;
    default:
        $mealType = 4;
    }
     
    $meal = [];
    $meal['date'] = $_POST['date'];
    $meal['mealType'] = $mealType;
    $meal['userID'] = 2;
    
    insertMeal($meal);
    
    // To be used to create a new MealsFoods entity
    $mealsFoods = [];
    // capture the new ID created from new meal insert
    $mealsFoods['mealID'] = mysqli_insert_id($conn);
    
    // handlers the creation of a new food item
    if ($_POST['newOrExisting'] == "existing") {
      // insert food into meal
    } else {
      
      $foodItem = [];
      $foodItem['foodName'] = $_POST['foodName'];
      $foodItem['gramsPerCalorie'] = $_POST['gramsPerCalorie'];
      $foodItem['gramsPerServing'] = $_POST['gramsPerServing'];
      
      insertFoodItem($foodItem);
      // capture the new ID created from new food insert
      $mealsFoods['foodID'] = mysqli_insert_id($conn);
      
      
    }
    
    
    // Need to grab new mealID and new foodID to use to insert into mealsFoods
    // this line to be replaced with user input
    $mealsFoods['gramsConsumed'] = 100; 
    insertMealsFoods($mealsFoods);
    
    
  }
  // send user to appropriate page
  header("Location: ../View/index.php");
?>