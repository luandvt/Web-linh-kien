<!-- Process login -->
<?php if(!isset($_SESSION)) 
{ 
    session_start(); 
} ?>
<?php
  $useremail = '';
  $userpass = '';
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["useremail"])) { $useremail = $_POST["useremail"]; }
    if(isset($_POST["userpass"])) { $userpass= $_POST["userpass"]; }
  }

  include_once("../database/connect.php");

  $sql = "SELECT * FROM users WHERE typeUsers='2001' or typeUsers='2002'";

  $result = mysqli_query($connect, $sql);

  if (mysqli_num_rows($result) > 0) 
  {
      while($row = mysqli_fetch_assoc($result)) {
          if($row["email"] == $useremail && $row["password"] == $userpass)
          {
            $_SESSION["user"] = $useremail;
            header("Location: home.php");
          }
      }
      if(!isset($_SESSION["user"]))
      {
        echo('Dang nhap loi, quay lai');
      }
  }
?>