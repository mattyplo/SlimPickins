<?php

  function renderFoodItemToOption($dataArray) {
    if (!(empty($dataArray["foodName"]))) {

      $option_start = "<option value='";
      $option_mid = "'>";
      $option_end = "</option>";
      $foodName = $dataArray["foodName"];
      
      return $option_start . $foodName . $option_mid . $foodName . $option_end;
    }
  }
 
  function renderMeal($dataArray) {
    if (!(empty($dataArray["mealType"])) && !(empty($dataArray["foodName"])) && !(empty($dataArray["date"]))) {
      $h1AndH3 = "<h1>" . $dataArray["date"] . "</h1><br><h3>" . $dataArray["mealType"] . "</h3><br>";
      $ulAndLi = "<ul><li>" . $dataArray["foodName"] . "<li><br>";
      
      return $h1AndH3 . $ulAndLi;
    }
  }

  function renderMealsToPage($dataArray) {
    foreach ($dataArray as $meal) {
      echo renderMeal($meal);
    }
  }
?>