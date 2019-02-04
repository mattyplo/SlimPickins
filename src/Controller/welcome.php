<?php
require("dbConnection.php");

//initialize the session
session_start();

//check if user is already logged in, if yes, then redirect to welcome page
//if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"]===true){
   // header("location:../index.php");
    //exit;
//}

if($_SERVER['REQUEST_METHOD']==='POST') {
    
    $user = $_POST['userName'];
    $password = $_POST['password'];
    
    $sql = "SELECT UserName, `Password` FROM Users WHERE UserName = '";
    $sql.=$user . "' ";
    $sql.="AND ";
    $sql.="`Password` = '";
    $sql.=$password . "';";
    $result = mysqli_query($conn, $sql);
        
    //associative array
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    
    if ($user == $row['UserName'] && $password == $row['Password']){
        header("Location: ../View/profile.php");
    } else {
        echo "No match.";
    }

}

   
?>

