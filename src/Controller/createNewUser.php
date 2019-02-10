<?php

require("dbconnection.php");
require("../Model/queryFunctions.php");

if($_SERVER['REQUEST_METHOD']==='POST') {
  
  //$result = verifyNewUniqueUser($_POST['userName']);

  
    $user = [];
    $user['firstName'] = $_POST['firstName'];
    $user['lastName'] = $_POST['lastName'];
    $user['userName'] = $_POST['userName'];
    $user['password'] = $_POST['password'];
  
    $result = selectUser($user);
    if (mysqli_num_rows($result) > 0){
    echo("Duplicate username, choose a different username");
  } else {
      
    insertUser($user);
  
    header("Location:../View/newUserSuccessLanding.php");
    
  }
}
?>