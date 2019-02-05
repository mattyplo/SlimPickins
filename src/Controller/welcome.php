<?php
require("dbConnection.php");
require("../Model/queryFunctions.php");

//initialize the session
session_start();

//check if user is already logged in, if yes, then redirect to welcome page
//if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]===true){
   // header("location:../index.php");
    //exit;
//}

if($_SERVER['REQUEST_METHOD']==='POST') {
    
    $user = [];
    $user['userName'] = $_POST['userName'];
    $user['password'] = $_POST['password'];
    $result = selectUser($user);    
    //associative array
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    if ($user['userName'] == $row['UserName'] && $user['password'] == $row['Password']){
        header("Location: ../View/profile.php");
    } else {
        echo "No match.";
    }

}

   
?>

