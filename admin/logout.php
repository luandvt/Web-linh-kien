<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    unset($_SESSION["adminname"]);
    header("Location: login.php");
?>