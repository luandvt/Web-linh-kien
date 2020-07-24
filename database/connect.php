<?php 
$hostName = 'localhost';
$userName = 'root';
$passWord = '';
$databaseName = 'weblinhkien';
$connect = null;
$connect = mysqli_connect($hostName, $userName, $passWord, $databaseName);
if($connect === null) echo('Connect to database failed!');
?>