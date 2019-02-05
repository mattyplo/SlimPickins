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
        <main id="landing">
            <p>Welcome to Slim Pickins Calorie Counter! Research shows that people who log calories lose more weight and are more likely to keep the weight off over time. Let us help you with our easy-to-use diary layout and highly customizable database.
            </p>
            
            <p>Our food database is curated by staff and highly customizable according to your dietary preferences and needs. Pick and choose from existing foods or create a new food item and add it to your daily log. Then let the app do the rest of the work for you! You'll know exactly how many calories you've consumed daily and be able to use that information to power your health and fitness goals.
            </p>
            
            <p>Register as a new user and start your Slim Pickins journey today!
            </p>
        </main>

        <aside id="landing">
            <div id="login">
                <form id = login name = "login" action = "../Controller/welcome.php" onsubmit = "return validateForm()" method = "POST">
                    <input type="text" name="userName" placeholder="User Name"><br>
                    <br>
                    <input type="password" name="password" placeholder="Password"><br>
                    <br>
                    <input type="submit" value="Log In"> 
                </form>
                </br>
                <form id="newUser" name = "newUser" action ="newUser.php" method="POST">
                    <input type="submit" value ="New User">
                </form>
            </div>
        </aside>
        </div>

        <footer>            
            <?php require_once 'footer.php' ?>        
        </footer>
    </div>
</body> 