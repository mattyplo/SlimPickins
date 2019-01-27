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
        <main>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In nec enim condimentum, dignissim quam eu, fermentum arcu. Integer at viverra leo. Duis pulvinar ornare quam non aliquet. Nam sollicitudin dui dui, ut fermentum turpis porta quis. Fusce ante nibh, auctor ut mollis sit amet, sodales vitae arcu. Fusce vitae neque lectus. Sed finibus velit risus, at vulputate dui dictum id. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus pulvinar tempor lacus, eu varius ipsum aliquam sit amet. Vivamus tempor arcu a urna congue semper. Mauris vulputate vestibulum lectus in scelerisque. </p>
            <p>Nulla elementum turpis mi, eget elementum lacus vulputate a. Nullam feugiat semper massa eu ultricies. Vivamus sagittis ipsum libero, blandit mollis quam cursus non. Maecenas ut posuere velit, vitae cursus ante. Suspendisse iaculis lorem volutpat, laoreet est in, aliquam mi. Phasellus efficitur ultricies iaculis. Maecenas vel rhoncus turpis. Vivamus blandit pellentesque tellus eget ultrices. </p>
        </main>

        <aside>
            <form id = login name = login action = "php/welcome.php" onsubmit = "return validateForm()" method = "POST">
                <input type="text" name="userName" placeholder="User Name"><br>
                <br>
                <input type="password" name="password" placeholder="Password"><br>
                <br>
                <input type="submit" value="Logon"> 
            </form>
        </aside>
        </div>

        <footer>            
            <?php require_once 'php/footer.php' ?>        
        </footer>
    </div>
</body> 