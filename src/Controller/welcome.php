<?php
require("dbConnection.php");
require("../Model/queryFunctions.php");
require("initialize.php");
if($_SERVER['REQUEST_METHOD']==='POST') {
  
    if($_POST['logOut'] === 'true') {
      log_out_user();
      header("Location: ../View/landing.php");
    }
    $user = [];
    $user['userName'] = $_POST['userName'];
    $user['password'] = $_POST['password'];
    $result = selectUser($user);    
    //associative array
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    if ($user['userName'] == $row['UserName'] && $user['password'] == $row['Password']){
        log_in_user($row);
        
        header("Location: ../View/profile.php");
        
    } else {
        echo "No match.";
    }

}

   
?>

