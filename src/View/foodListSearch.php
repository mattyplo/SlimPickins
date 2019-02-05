<?php 
    // require('credentials.php');

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    echo
    '
    <form id=search name=foodSearch action="foodListSearch.php" method = "GET">
    <input type="text" name="search" placeholder="apple" size="100">
    <input type="submit" value="search">
    </form>
    ';

    $get_foodSearch = "'".$_GET."'";

    $sql = "INSERT INTO 'Foods' VALUES ('Pizza',3.00,107.00),('Kale',2.03,67.00),('Bacon',3.85,26.00),('Yoghurt',1.00,245.00),('Carrot',2.44,61.00)";
    $sql = "SELECT foodName, calories, servingSize FROM FOODS WHERE foodName LIKE ". $get_foodSearch. ";";
    $result = $conn->query($sql);

    echo '<div id="foodlist">';

    if ($result ->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo 
            '
            <div id="'.$row[foodName].'">
            <a id="'.$row[foodName].'" href="food_item.php?foodName="'.$row[foodName].'>
            <img class="foodicon" src="images/placeholder.jpg" alt="Food Icon">
            <div class=foodlist_item>
                <ul>
                    <il> '.$row[foodName].' </il>
                    <il> Calories '.$row[calories].' per gram</il>
                    <il> Serving Size: '.$row[servingSize].' </il>
            </div>
            </a>
            </div>';
        } 
    }else {
        echo "0 results";
    }

    echo '</div>';

?>