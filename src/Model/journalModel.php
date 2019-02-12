<?php
  require("../Controller/dbConnection.php");
  require("queryFunctions.php");
  
  // placeholder int 2 in parameter until we g
  $userMeals = selectMeals(2);

  // Array to store meals into
  $meals = [];
  
  // This function will sort the meals array by date
  function date_compare($a, $b) {
      //var_dump($a);
      $t1 = strtotime($a);
      $t2 = strtotime($b);
      // The negative in front the result sorts by the most recent entry
      return -($t1 - $t2);
  }    
  
  foreach ($userMeals as $meal=>$val) {
    // grab each food item in a meal and calories consumed
    /*$sql = "SELECT FoodID, GramsConsumed FROM mealsfoods
WHERE MEALID = ";
    $sql .= $val['MealID'];
    $mealFoodsResult = mysqli_query($conn, $sql);
    $mealFoods = mysqli_fetch_row($mealFoodsResult);*/
    //var_dump($mealFoods);
    $foodID = selectFoodID($val['MealID']);
    
    $sql = "SELECT FoodName FROM Foods WHERE FOODID = ";
    // index 0 is FoodID
    $sql .= $foodID;
    $foodItemResult = mysqli_query($conn, $sql);
    $foodNameRow = mysqli_fetch_row($foodItemResult);
    $foodName = $foodNameRow[0];
    $foodItemResult = mysqli_query($conn, $sql);
    $foodNameRow = mysqli_fetch_row($foodItemResult);
    $foodName = $foodNameRow[0];
    
    // Grab each meal type and convert it into mealName
    $sql = "SELECT MealName FROM MealTypes WHERE MealTypeID = ";
    $sql .= (int)$val['MealTypeID'];
    $mealTypeResult = mysqli_query($conn, $sql);
    $mealTypeRow = mysqli_fetch_row($mealTypeResult);
    $mealType = $mealTypeRow[0];
    
    $date = $val['Date'];
    
    //$meals[$val['Date']] = [];
    if (!array_key_exists($date, $meals)) {
      $meals[$date] = [];
      if (!array_key_exists($mealType, $meals[$date])){
        $meals[$date][$mealType] = [];
        array_push($meals[$date][$mealType], $foodName);
        
        //$meals[$date]['foodName'] = $foodName;
      } 
    } else { 
        if (!array_key_exists($mealType, $meals[$date])){
        $meals[$date][$mealType] = [];
        array_push($meals[$date][$mealType], $foodName);
        }
    }
  }
  
  uksort($meals, 'date_compare');

/********************** Existing Food Item options **************/

  $sql = "SELECT * FROM foods;";
  $allFoods = mysqli_query($conn, $sql);

  function renderFoodToOption($dataArray) {
    if (!(empty($dataArray["FoodName"]))) {

      $option_start = "<option value='";
      $option_mid = "'>";
      $option_end = "</option>";
      $foodName = $dataArray['FoodName'];
      $foodID = $dataArray['FoodID'];
      return $option_start . $foodID . $option_mid . $foodName . $option_end;
    }
  }

?>