<?php
    if(!isset($_SESSION))
    {
        session_start();
    }    
    if(!isset($_SESSION['start']) /* || !isset($_COOKIE['isValid']) || !isset($_COOKIE['rememberMe']) */){
        header('location: login.php');
    }
?>