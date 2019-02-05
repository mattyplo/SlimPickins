<?php 
    require('../Controller/credentials.php');

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $get_foodSearch = implode(array_values($_GET));

    $sql = "SELECT FoodID, FoodName, GramsPerServing, CaloriesPerGram FROM FOODS WHERE FoodName LIKE '". $get_foodSearch. "' ;";
    $result = $conn->query($sql);
    error_log(print_r($result, TRUE));

    echo '<div id="foodlist">';

    if ($result ->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $get_foodName = $row[FoodName];
            $get_foodID = $row[FoodID];
            echo 
            '
            <div class="foodlist_item">
            <a id="'.$get_foodName.'" href="food_item.php?foodName='.$get_foodName.'&FoodID='.$get_foodID.'">
            <img class="foodicon" src="images/placeholder.png" alt="Food Icon">
            <div class=foodlist_itemProperty>
                <ul>
                    <il class="foodlist_itemName"> '.$get_foodName.' </il> </br></br>
                    <il> Calories '.$row[CaloriesPerGram].' per gram</il> </br>
                    <il> Serving Size: '.$row[GramsPerServing].' </il>
            </div>
            </a>
            </div>';
        } 
    }else {
        echo "0 results";
    }

    echo '</div>';

?>