
<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Slim Pickins Journal</title>

<!--Remy Sharp Shim --> 
<!--[if lte IE 9]> 
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js" type="text/javascript" >
</script> 
<![endif]-->
<link href="css/styles.css" type= "text/css" rel="stylesheet">
<script src="js/addMeal.js"></script>  
  
</head>

<body>
    
    
   
    
    <div class="wrapper">
        
    <header>        
        <?php require_once 'php/header.php'; ?>        
     </header>

         <main>
        
        <button id="addMeal">Add Meal</button>
        
        <div class="form-popup" id="myForm">
          <form action="/action_page.php" class="form-container">
            <h1>Add Meal</h1>

            <label for="date"><b>Date</b></label>
            <input type="text" placeholder="MM/DD/YYYY" name="date" required>
            <label for="meal"><b>Meal</b></label>
            <select name="meal">
              <option value="breakfast">Breakfast</option>
              <option value="lunch">Lunch</option>
              <option value="dinner">Dinner</option>
              <option value="snack">Snack</option>
            </select>
            <br>
            <br>
            <input type="radio" name="newOrExisting" value="new" checked> New <br>
            <input type="radio" name="newOrExisting" value="existing"> Existing <br>
            
            <div id="existing">
              <br>
              <select name="foodItem">
                <?php
                  foreach ($mockDBQuery as $item) {
                    echo renderFoodItemToOption($item);
                  }
                ?>
              </select>
            </div>
            
            <br>
            <button type="submit" class="btn">Add Meal</button>
            <button type="button" class="btn cancel" id="closeFormButton" >Cancel Add Meal</button>
          </form>
        </div>
           
        <?php
          renderMealsToPage($mockMealQuery);
        ?>
             
        </main>
       
        
        
        <footer>            
            <?php require_once 'php/footer.php' ?>        
        </footer>
    
    
  
        </div>    <!--end wrapper-->
       
    
</body>
    
    
</html>