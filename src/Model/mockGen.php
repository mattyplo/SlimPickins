<?php
require("../Controller/dbConnection.php");
require("../Model/queryFunctions.php");


//====Mock Food====
$foodItem = ['foodName','caloriesPerGram','gramsPerServing'];

for ($i=0; $i<50; $i++){
    $foodItem['foodName'] = 'Food'.$i;
    $foodItem['caloriesPerGram'] = rand(1, 50000)/100;
    $foodItem['gramsPerServing'] = rand(1, 20000)/100;

    insertFoodItem($foodItem);
}

// $foodItem = array(
//     array("foodName"=> "carrots", "caloriesPerGram"=>"120.0", "gramsPerServing"=>"3.5"),
//     array("foodName"=> "pizza", "caloriesPerGram"=>"320.0", "gramsPerServing"=>"6.0"),
//     array("foodName"=> "yoghurt", "caloriesPerGram"=>"200.0", "gramsPerServing"=>"4.0"),
//     array("foodName"=> "kale", "caloriesPerGram"=>"90.0", "gramsPerServing"=>"3.0"),
//     array("foodName"=> "bacon", "caloriesPerGram"=>"350.0", "gramsPerServing"=>"2.5"),
// );
// error_log(print_r($foodItem, true));

// foreach($foodItem as $x => $row){
//     error_log(print_r("x".$foodItem[$x], true));
//     insertFoodItem($x);
// }

//====Mock User====
$user = ['firstName','lastName','userName','password'];

for ($i=0; $i<5; $i++){
    $user['firstName'] = 'FirstName'.$i;
    $user['lastName'] = 'LastName'.$i;
    $user['userName'] = 'UserName'.$i;
    $user['password'] = rand(10000, 20000);

    insertUser($user);
}

//====Mock Meal Type====
$mealType = array('breakfast', 'lunch', 'dinner', 'snack');

for ($i = 0; $i < count($mealType); $i++){
    insertMealType($mealType[$i]);
}

//====Mock Meal====
$meal = ['date','mealType','userID'];

function randomDate($start_date, $end_date){
    $start = strtotime($start_date);
    $end = strtotime($end_date);

    $da = rand($start, $end);

    return date('Y-m-d', $da);
}

for ($i=0; $i<50; $i++){
    $meal['date'] = randomDate('2018-01-01', '2019-02-12');
    $meal['mealType'] = rand(1,4);
    $meal['userID'] = rand(1,5);

    insertMeal($meal);
}

//====Mock MealFood====
$mealFood = ['mealID','foodID','gramsConsumed'];

for($m=1; $m<=50; $m++){
    $foodPerMeal = rand(2, 5);
    for($i=0; $i<$foodPerMeal; $i++){
        $mealFood['mealID'] = $m;
        $mealFood['foodID'] = rand(1, 50);
        $mealFood['gramsConsumed'] = rand(1, 5);
    }
    insertMealsFoods($mealFood);
}


?>