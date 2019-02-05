<!-- something something generate list of food match searching keywords
something something generate each list item from one of the return tuple -->

<?php 
    for ($i = 0; $i < 5; $i++) {
        echo 
            '
            <div id="foodlist_item">
            <a id="foodlist_item" href="food_item.php">
            <img class="foodicon" src="images/placeholder.jpg" alt="Food Icon">
            <div class=foodlist_item>
                <p class=foodlist_itemname>Item Name</p>
                <p class="foodlist_itemdescription"> Here is a short description of this food.</p>
            </div>
            </a>
            </div>';
    }

