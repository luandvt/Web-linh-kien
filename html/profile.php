<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    if(!isset($_SESSION["user"]))
    {
        header("Location: account.php");
    }
    echo('this is profile!');
?>
<form  action="./logout.php"><button type="submit">Logout</button></form>