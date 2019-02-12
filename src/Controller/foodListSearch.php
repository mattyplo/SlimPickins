<?php 
    require('dbConnection.php');

    $get_foodSearch = implode(array_values($_GET));

    $sql = "SELECT FoodID, FoodName, GramsPerServing, CaloriesPerGram FROM FOODS WHERE FoodName LIKE '%". $get_foodSearch. "%' ;";
    $result = $conn->query($sql);
    

    echo '<div id="foodlist">';

    if ($result ->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $get_foodName = $row['FoodName'];
            $get_foodID = $row['FoodID'];
            echo 
            '
            <div class="foodlist_item">
            <a id="'.$get_foodName.'" href="food_item.php?foodName='.$get_foodName.'&FoodID='.$get_foodID.'">
            <img class="foodicon" src="../View/images/placeholder.png" alt="Food Icon">
            <div class=foodlist_itemProperty>
                <ul>
                    <il class="foodlist_itemName"> '.$get_foodName.' </il> </br></br>
                    <il> Calories: '.$row['CaloriesPerGram'].' per gram</il> </br>
                    <il> Serving Size: '.$row['GramsPerServing'].' </il>
            </div>
            </a>
            </div>';
        } 
    }else {
        echo "0 results";
    }

    echo '</div>';

?>