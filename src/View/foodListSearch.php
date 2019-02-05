<?php 
    require('../Controller/credentials.php');

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $get_foodSearch = implode(array_values($_GET));

    error_log(print_r($get_foodSearch, TRUE)); 

    $sql = "SELECT FoodName, GramsPerServing, CaloriesPerGram FROM FOODS WHERE FoodName LIKE '". $get_foodSearch. "' ;";
    error_log(print_r($sql, TRUE)); 
    $result = $conn->query($sql);

    echo '<div id="foodlist">';

    if ($result ->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo 
            '
            <div class="foodlist_item">
            <a id="'.$row[foodName].'" href="food_item.php?foodName="'.$row[foodName].'>
            <img class="foodicon" src="images/placeholder.png" alt="Food Icon">
            <div class=foodlist_itemProperty>
                <ul>
                    <il class="foodlist_itemName"> '.$row[FoodName].' </il> </br></br>
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