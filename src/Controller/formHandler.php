<?php

  require("dbconnection.php");
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

    
    // handlers the creation of a new food item
    if ($_POST['newOrExisting'] == "existing") {
      // insert food into meal
    } else {
      
      $foodItem = [];
      $foodItem['foodName'] = $_POST['foodName'];
      $foodItem['gramsPerCalorie'] = $_POST['gramsPerCalorie'];
      $foodItem['gramsPerServing'] = $_POST['gramsPerServing'];
      
      insertFoodItem($foodItem);
  
    }
  }
  // send user to appropriate page
  header("Location: ../View/index.php");
?>