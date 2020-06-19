<?php

function isActive(){
    session_start();
    $session = $_SESSION['loggedin'];
    if($session == null||$session == ""){
        ob_start();
        header('Location: ../admin/login.php');
        ob_end_flush();
    }
    return;
}

function logout(){

    session_start();
    session_destroy();
    ob_start();
    header('Location: ../index.php');
    ob_end_flush();
    die();

}
