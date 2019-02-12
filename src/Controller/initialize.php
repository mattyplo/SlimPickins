<?php

session_start();

function require_login(){
    if (!is_logged_in()){;
        header('Location: ../View/landing.php');
    } else {
        //can stay on page
    }
    
}

function log_in_user($user){
    session_regenerate_id();
    $_SESSION['userName'] = $user['UserName'];
    $_SESSION['userID'] = $user['UserID'];
    return true;
}

function is_logged_in(){
    return ISSET($_SESSION['userName']);
}

function log_out_user() {
    unset($_SESSION['userID']);
    unset($_SESSION['userName']);
    return true;
  }

?>