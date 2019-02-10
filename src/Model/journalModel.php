<?php
  require("../Controller/dbConnection.php");

  $sql = "SELECT * FROM Meals ";
  $sql .= "WHERE UserID = 2";
  $userMeals = mysqli_query($conn, $sql);
 
  // Array to store meals into
  $meals = [];
  
  // This function will sort the meals array by date
  function date_compare($a, $b) {
      $t1 = strtotime($a['date']);
      $t2 = strtotime($b['date']);
      // The negative in front the result sorts by the most recent entry
      return -($t1 - $t2);
  }    
  
  foreach ($userMeals as $meal=>$val) {
    // grab each food item in a meal and calories consumed
    $sql = "SELECT FoodID, GramsConsumed FROM mealsfoods
WHERE MEALID = ";
    $sql .= $val['MealID'];
    $mealFoodsResult = mysqli_query($conn, $sql);
    $mealFoods = mysqli_fetch_row($mealFoodsResult);
    //var_dump($mealFoods);
    
    $sql = "SELECT FoodName FROM Foods WHERE FOODID = ";
    // index 0 is FoodID
    $sql .= (int)$mealFoods[0];
    $foodItemResult = mysqli_query($conn, $sql);
    $foodNameRow = mysqli_fetch_row($foodItemResult);
    $foodName = $foodNameRow[0];
    
    $meals[$meal] = $val['MealID'];
    $meals[$meal] = [];
    $meals[$meal]['date'] = $val['Date'];
    $meals[$meal]['mealType'] = $val['MealTypeID'];
    $meals[$meal]['foodName'] = $foodName;
    /*foreach ($mealFoods as $food) {
      $meals[$meal]['$food'] = $food;
    }*/
    
  }

  usort($meals, 'date_compare');
?>