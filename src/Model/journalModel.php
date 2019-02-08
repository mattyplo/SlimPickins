<?php
  require("../Controller/dbConnection.php");

  $sql = "SELECT * FROM Meals ";
  $sql .= "WHERE UserID = 2";
  $userMeals = mysqli_query($conn, $sql);
  

  $meals = [];
  foreach ($userMeals as $meal=>$val) {
    $meals[$meal] = $val['MealID'];
    $meals[$meal] = [];
    $meals[$meal]['date'] = $val['Date'];
    $meals[$meal]['mealType'] = $val['MealTypeID'];
    
   /* foreach ($val as $meal) {
      $mealID = $meal['MealID'];
      $meals[$mealID]['date'] = $meal['Date'];
      $meals[$mealID]['mealType'] = $meal['MealTypeID'];
    }*/
  }
  //$sql = "SELECT * FROM MealsFoods";
  //$sql = "WHERE"






?>