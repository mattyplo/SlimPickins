The Slim Pickins web application is a simple calorie counter.  It allows a user to enter food items in and the calories consumed in order to keep a tally of total caloric consumption.  It will be presented as a blog / journal.  A user will be able to submit particular food items and the calories associated with that item.  The user can list their meals daily and keep track of their meals over a period of time.  The user will have a profile page.  The project has a backlog of user stories that the developers created to help divide the work up into logical bits.

#Setting up for the Database.  
You will need to add a file in the src/Controller folder called credentials.php

You will have to assign the appropriate values to the variables given.  The file should resemble the following.  Be sure to add php tags (<?php and ?>) 

  $servername = "servername";
  $username = "username";
  $password = "password";
  $dbname = "dbname";

#initiate Database for Project Demo.
1. execute db_structure.sql in DataModel folder to initiate database structure.
2. visit /SlimPickins/src/Controller/ini.php to populate database with mock data. 
   Mock user name and password are displayed on the page.