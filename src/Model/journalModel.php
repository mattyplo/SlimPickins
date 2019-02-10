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
      return $t1 - $t2;
  }    
  
  foreach ($userMeals as $meal=>$val) {
    $meals[$meal] = $val['MealID'];
    $meals[$meal] = [];
    $meals[$meal]['date'] = $val['Date'];
    $meals[$meal]['mealType'] = $val['MealTypeID'];
  }

  usort($meals, 'date_compare');
?>