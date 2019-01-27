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
 
?>