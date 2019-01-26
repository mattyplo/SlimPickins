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
            <?php require_once 'php/header.php'; ?>  
        </header>

        <div class="content">
        <main id = foodlist>
            <form id=search name=searchbar onsubmit= "acknowledge()" method = "POST">
                <input type="text" name="search" placeholder="What's for dinner?" size="75">
                <input type="submit" value="search">
            </form>
            <div id="foodlist">
                <?php database_search?>
            </div>
        </main>

        <aside id = foodlist>
            <button onclick = "acknowledge()" id="favorite">
            <img id="favorite" src="images/star.jpg" alt="add to favorite"> <!-- should be replace by code enable favorited item change to solid star-->
            </button> 
            <button onclick = "acknowledge()" id="editItem">
            Edit Item <!-- should be replace by code enable favorited item change to solid star-->
            </button> 
            <button onclick = "acknowledge()" id="deleteItem">
            Delete Item <!-- should be replace by code enable favorited item change to solid star-->
            </button> 
        </aside>
        </div>

        <footer>            
            <?php require_once 'php/footer.php' ?>        
        </footer>
    </div>
</body> 