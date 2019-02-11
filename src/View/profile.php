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
            <?php require_once 'header.php'; ?>  
            <?php require '../Controller/initialize.php';?>
        <?php require_login();?>
        </header>

        <div class="content">
            <form name = profile action = "welcome.php" onsubmit = "return validateForm()" method = "POST">
                <div id = profile_fill>
                First Name: <input type="text" name="first" placeholder="User Name"><br>
                <br>
                Last Name: <input type="text" name="last" placeholder="Last Name"><br>
                <br>
                Biological Sex: <input type="text" name="sex" placeholder="Male/Female"><br>
                <br>    
                Date of Birth: <input type="datetime-local" name="Date of Birth"><br>
                <br>
                Current Weight(lbs): <input type="text" name="sex" placeholder="i.e. 125"><br>
               
          
                </div>
                <div id="profile_submit">
                    <input id="profile_submit" type="submit" value="Update">
                </div>    
            </form>
        </div>

        <footer>            
            <?php require_once 'footer.php' ?>        
        </footer>
    </div>
</body> 