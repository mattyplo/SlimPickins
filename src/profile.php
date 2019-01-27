<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Slim Pickins Profile</title>
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
            <form name = profile action = "php/welcome.php" onsubmit = "return validateForm()" method = "POST">
                <div id = profile_fill>
                Name: <input type="text" name="name" placeholder="User Name"><br>
                <br>
                Biological Sex: <input type="text" name="sex" placeholder="Male/Female"><br>
                <br>
                Date of Birth: <input type="datetime-local" name="DoB"><br>
                <br>
                Diet Goal: <input type="text" name="goal" placeholder="lose 5 lbs."><br>
                <br>
                Allegents: <input type="text" name="allegent" placeholder="peanuts, seafood, hotdogs"><br>
                <br>
                Something: <input type="text" name="something" placeholder="blahblah"><br>
                <br>
                Something: <input type="text" name="something" placeholder="blahblah"><br>
                <br>
                Something: <input type="text" name="something" placeholder="blahblah"><br>
                <br>
                Something: <input type="text" name="something" placeholder="blahblah"><br>
                <br>
                Something: <input type="text" name="something" placeholder="blahblah"><br>
                <br>
                Something: <input type="text" name="something" placeholder="blahblah"><br>
                <br>
                Something: <input type="text" name="something" placeholder="blahblah"><br>
                <br>
                Something: <input type="text" name="something" placeholder="blahblah"><br>
                <br>
                Something: <input type="text" name="something" placeholder="blahblah"><br>
                <br>
                </div>
                <div id="profile_submit">
                    <input id="profile_submit" type="submit" value="Submit">
                </div>    
            </form>
        </div>

        <footer>            
            <?php require_once 'php/footer.php' ?>        
        </footer>
    </div>
</body> 