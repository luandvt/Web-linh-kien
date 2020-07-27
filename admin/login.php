<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../img/logo000.png" type="image/ico" />

    <title>Login admin 000</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <!-- Form login -->
      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form id="adminlogin" name="formAdminLog" method="post" action="">
              <h1>Login Admin 000</h1>
              <div>
                <input name="adminName" type="text" class="form-control" placeholder="Username" required="" />
              </div>
              <div>
                <input name="adminPw" type="password" class="form-control" placeholder="Password" required="" />
              </div>
              <div><button type="submit" class="btn btn-primary">Đăng nhập</button></div>
                  <h1><i class="fa fa-paw"></i> Web linh kiện 000 </h1>
                  <p>©2020 All Rights Reserved. SiUDev</p>
                </div>
              </div>
            </form>
          </section>
        </div>
      </div>
    <!-- Check login -->
<?php
include_once("../database/connect.php");
$user = @$_REQUEST["adminName"];
$pass = @$_REQUEST["adminPw"];

if(!isset($_SESSION)) 
{ 
    session_start(); 
}

  $sql = "SELECT name, password FROM users WHERE typeUsers='1001' or typeUsers='1002'";

  $result = mysqli_query($connect, $sql);

  if (mysqli_num_rows($result) > 0) 
  {
      while($row = mysqli_fetch_assoc($result)) {
          if($row["name"] === $user && $row["password"] === $pass)
          {
            $_SESSION["adminname"] = $user;
              header("Location: index.php");
          }
      }
  } 
?>
</body>
</html>