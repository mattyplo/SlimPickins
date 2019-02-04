<?php

require("dbconnection.php");

if($_SERVER['REQUEST_METHOD']==='POST') {
    
    $sql ="INSERT INTO Users ";
    $sql.="(FirstName, LastName, UserName, Password) ";
    $sql.="VALUES (";
    $sql.="'" . $_POST['firstName']."',";
    $sql.="'" . $_POST['lastName'] ."',";
    $sql.="'" . $_POST['userName'] ."',";
    $sql.="'" . $_POST['password'] ."'";
    $sql.=")";
   $result = mysqli_query($conn, $sql);
    
    
    if ($result){
        header("Location:../newUserSuccessLanding.php");
    }else {
        die(mysqli_error($conn));
        echo mysqli_error($conn);
        db_disconnect($conn);
        exit;
    }    
}



?>