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
            <div id="fooditem">
                <?php require_once '../Controller/foodItem.php' ?>
            </div>
        </main>

        <aside id = food>
            <?php include_once 'foodaside.php' ?> 
        </aside>
        </div>

        <footer>            
            <?php require_once 'footer.php' ?>        
        </footer>
    </div>
</body> 