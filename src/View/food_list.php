<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Slim Pickins Landing</title>
<link href="css/styles.css" type= "text/css" rel="stylesheet">
<script src="js/addMeal.js"></script> 
<script src="js/formValidation.js"></script> 
</head>

<body>
    <div class="wrapper">
        <header>
            <?php require_once 'header.php'; ?>  
        </header>

        <div class="content">
        <main id = food>

            
            <form id=search name=searchbar method = "GET">
                <input type="text" name="search" placeholder="What's for dinner?" size="100">
                <input type="submit" value="search">
            </form>
            
            
            <?php require_once 'foodListSearch.php' ?>

        </main>

        <aside id = food>
            <button onclick = "acknowledge()" id="favorite">
            <img id="favorite" src="images/star.jpg" alt="add to favorite"> <!-- should be replace by code enable favorited item change to solid star-->
            </button> 
            <button id="addItem">Add Item</button>
              
            <button onclick = "acknowledge()" id="editItem">
            Edit Item <!-- should be replace by code enable favorited item change to solid star-->
            </button> 
            <button onclick = "acknowledge()" id="deleteItem">
            Delete Item <!-- should be replace by code enable favorited item change to solid star-->
            </button> 
        </aside>
        </div>

        <footer>            
            <?php require_once 'footer.php' ?>        
        </footer>
    </div>
</body> 