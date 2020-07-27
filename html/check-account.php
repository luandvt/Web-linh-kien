<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
    if(!isset($_SESSION["user"]))
    {
        header("Location: account.php");
    }
    if(isset($_SESSION["user"]))
    {
        echo('hello '.$_SESSION["user"]);
        header("Location: profile.php");
    }
    
?>