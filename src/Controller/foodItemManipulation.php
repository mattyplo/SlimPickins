<?php
require("dbConnection.php");
require("../Model/queryFunctions.php");

$foodItem = [];
$foodItem['foodName'] = $_POST['foodName'];
$foodItem['caloriesPerGram'] = $_POST['caloriesPerGram'];
$foodItem['gramsPerServing'] = $_POST['gramsPerServing'];

$return = verifyFood($foodItem);
$result = $return->fetch_assoc();

if ($result['isTrue'] == 'true'){
    updateFoodItem($foodItem);
} else {
    insertFoodItem($foodItem);
}

header("Location: ../View/food_list.php?search=".$foodItem['foodName']);
?>