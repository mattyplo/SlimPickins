<?php
require('../Controller/dbConnection.php');

$get_foodName = $_GET[foodName];

$sql = "SELECT FoodID, FoodName, GramsPerServing, CaloriesPerGram FROM FOODS WHERE FoodName LIKE '". $get_foodName. "' ;";
$result = $conn->query($sql)->fetch_assoc();

echo 
'
<ul id="fooditem">
    <li> Item Description: '.$result[FoodName].'</li> 
    <li> Serving Size: '.$result[GramsPerServing].'</li> 
    <li> Calories pre Serving: '.$result[GramsPerServing] * $result[CaloriesPerGram].'</li> 
    <li> Dietary Restriction: unkown</li>
';
$sql = "SELECT MealDate, MealName FROM foods JOIN mealsfoods USING (FoodID) JOIN meals USING (MealID) JOIN mealtypes USING (MealTypeID) WHERE FoodID = ".$result[FoodID].";";
$result = $conn->query($sql)->fetch_assoc();
echo
' 
    <li> Last Time Eaten: '.$result[Date].' for '.$result[MealName].'</li> 
    <li> Season:</li> 
</ul>
';
?>