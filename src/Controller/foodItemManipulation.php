<?php
require("dbConnection.php");
require("../Model/queryFunctions.php");

$foodItem = [];
$foodItem['foodName'] = $_POST['foodName'];
$foodItem['caloriesPerGram'] = $_POST['caloriesPerGram'];
$foodItem['gramsPerServing'] = $_POST['gramsPerServing'];

if ($sqlFoodExist == 'true'){
    updateFoodItem($foodItem);
} else {
    insertFoodItem($foodItem);
}


?>