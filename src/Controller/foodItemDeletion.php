<?php
require("dbConnection.php");
require("../Model/queryFunctions.php");

$foodName = $_POST['foodName'];

deleteFoodItem($foodName);

header("Location: ../View/food_list.php?search=".$foodName);
?>