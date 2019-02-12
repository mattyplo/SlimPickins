<?php
echo '


<div class="form-popup" id="myDelForm">
  <form action="../Controller/foodItemDeletion.php" class="form-container" method="post">
    <h1>Delete Food</h1>
    
    <label for="foodName"><b>Food Name</b></label>
    <input type="text" name="foodName">
    
    <button type="submit" class="btn">Delete Food</button>
    <button type="button" id="closeFormButton" class="btn cancel">Cancel</button>
  </form>
</div>



'
?>