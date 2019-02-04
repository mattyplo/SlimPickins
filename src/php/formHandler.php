<?php

  require("dbconnection.php");
  require("queryFunctions.php");

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
    
    $date = $_POST['date'];
    $sqlMeal = "INSERT INTO Meals ";
    $sqlMeal .= "(`Date`, MealTypeID, UserID) ";
    $sqlMeal .= "VALUES (";
    $sqlMeal .= "'" . $date ."',";
    $sqlMeal .= $mealType . ", ";
    $sqlMeal .= 1;
    $sqlMeal .= ")";
    $resultMeal = mysqli_query($conn, $sqlMeal);

    
    // handlers the creation of a new food item
    if ($_POST['newOrExisting'] == "existing") {
      // insert food into meal
    } else {
      
      $foodItem = [];
      $foodItem['foodName'] = $_POST['foodName'];
      $foodItem['gramsPerCalorie'] = $_POST['gramsPerCalorie'];
      $foodItem['gramsPerServing'] = $_POST['gramsPerServing'];
      
      insertFoodItem($foodItem);
      /*
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
*/
    }
  }
  // send user to appropriate page
  header("Location: ../index.php");
?>