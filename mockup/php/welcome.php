    <?php
    $post_array = $_POST;

    foreach($post_array as $key => $val){
        if ($val != ""){
            echo $key . ': ' . $val . '<br>';  
        }
    }

    echo "weclome to site of security risk.<br>";
    ?>

    <a href="../index.php">Go to your Journal Home