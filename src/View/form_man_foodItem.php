<?php
echo '


<div class="form-popup" id="myForm">
  <form action="../Controller/foodItemManipulation.php" class="form-container" method="post">
    <h1>Add/Edit Food</h1>
    
    <ul style="list-style-type: none;">
    <li>
    <label for="foodName"><b>Food Name</b></label>
    <input type="text" name="foodName">
    </li>
    <li>
    <label for="gramsPerServing"><b>Grams Per Serving</b></label>
    <input type="number" name="gramsPerServing" step="0.01">
    </li>
    <li>
    <label for="caloriesPerGram"><b>Calories Per Gram</b></label>
    <input type="number" name="caloriesPerGram" step="0.01">
    </li>
    </ul>

    <br>
    <br>
    <button type="submit" class="btn">Add Food</button>
    <button type="button" id="closeFormButton" class="btn cancel">Cancel</button>
  </form>
</div>



'
?>