<?php
include_once("../database/connect.php");
$user = @$_REQUEST["email"];
$pass = @$_REQUEST["pass"];

  $sql = "SELECT email, password FROM users WHERE typeUsers='2001' or typeUsers='2002'";

  $result = mysqli_query($connect, $sql);
  if (mysqli_num_rows($result) > 0) 
  {
      while($row = mysqli_fetch_assoc($result)) {
          if($row["email"] === $user && $row["password"] === $pass)
          {
            // header("Location: login.php");
          }
      }
  }
?>