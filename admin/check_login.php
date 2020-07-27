<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if(!isset($_SESSION["adminname"])) 
        header("Location: login.php");
?>