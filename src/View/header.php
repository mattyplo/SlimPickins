<?php
  require "../Model/MockFoodItemsData.php";
  require "../Model/renderMockData.php";
  require "../Model/MockMealsData.php";
  require "../Controller/dbConnection.php";
?>

<div id = "header">

    <a class="logo" href = "index.php"><h1 class="logo">Slim Pickins</h1></a>
        
    
    <nav id= "primary">

        <ul>

        <?php
        $file_calling= pathinfo($_SERVER['SCRIPT_FILENAME']);

        echo ('<li><a href="index.php"');
        if ($file_calling['filename'] == 'index') {echo ('class="active"');}
        echo (">Home</a></li>");
        echo ('<li><a href="profile.php"');
        if ($file_calling['filename'] == 'profile') {echo ('class="active"');}
        echo (">Profile</a></li>");
        echo ('<li><a href="food_list.php"');
        if ($file_calling['filename'] == 'food_list' || $file_calling['filename'] == 'food_item') {echo ('class="active"');}
        echo (">Food</a></li>");
        echo ('<li><a href="landing.php"');
        if ($file_calling['filename'] == 'landing') {echo ('class="active"');}
        echo (">Login</a></li>");

        // $pages = scandir('../mockup');
        // //clean $pages for just .php files under root folder
        // $pages_count = 0;
        // foreach($pages as $page) {
        //     if(!preg_match('(.php)', $page)){unset($pages[$pages_count]);}
        //     $pages_count++;
        // }

        // // dynamic nav gen
        // foreach($pages as $link){
        //     echo ('<li><a href="'.$link.'">');          
        //     if(preg_match('(index)', $link)){echo('Home');}
        //     elseif (preg_match('(profile)', $link)){echo('Profile');}
        //     elseif (preg_match('(food_list)', $link)){echo('Search');}
        //     elseif (preg_match('(landing)', $link)){echo('Login');}
        //     echo('</a></li>');

        // }
        
        ?>

        </ul>
    </nav>

</div>
