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
    $newMealID = mysqli_insert_id($conn);
    $newFoodID = '';
    
    // handlers the creation of a new food item
    if ($_POST['newOrExisting'] == "existing") {
      // insert food into meal
    } else {
      
      $foodItem = [];
      $foodItem['foodName'] = $_POST['foodName'];
      $foodItem['gramsPerCalorie'] = $_POST['gramsPerCalorie'];
      $foodItem['gramsPerServing'] = $_POST['gramsPerServing'];
      
      insertFoodItem($foodItem);
      $newFoodID = mysqli_insert_id($conn);
  
    }
    
    
    // Need to grab new mealID and new foodID to use to insert into mealsFoods
    $sql = "INSERT INTO MealsFoods ";
    $sql .= "(MealID, FoodID, GramsConsumed) ";
    $sql .= "VALUES (";
    $sql .= $newMealID . ", ";
    $sql .= $newFoodID . ", ";
    $sql .= 100 . ")";
    mysqli_query($conn, $sql);
  }
  // send user to appropriate page
  header("Location: ../View/index.php");
?>