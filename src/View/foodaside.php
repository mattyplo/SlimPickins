<?php
echo
'
<ul id = "foodasidelist">
   <!-- <li>
    <button onclick = "acknowledge()" id="favorite">
    <img id="favorite" src="images/star.jpg" alt="add to favorite">  should be replace by code enable favorited item change to solid star
    </button> 
    </li>-->
    <li>
';

    include 'form_man_foodItem.php';

echo
'
    <button class="foodItemManipulation" id="addItem">Add Item</button>
    </li>
    <li>
';

    include 'form_man_foodItem.php';

echo'
    <button class="foodItemManipulation" id="editItem">Edit Item</button> 
    </li>
    <li>
';

    include 'form_del_foodItem.php';

echo'
    <button class = "foodItemManipulation" id="deleteItem">
    Delete Item
    </button> 
    </li>
</ul>
';
?>