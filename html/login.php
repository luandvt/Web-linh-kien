
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
    <link rel="stylesheet" type="text/css" href="../css/login/util.css">
    <link rel="stylesheet" type="text/css" href="../css/login/main.css">
    <link rel="stylesheet" type="text/css" href="../css/login/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="../css/login/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../css/login/animate.css">
  </head>

  <body class="login">
    <!-- Form login -->
    <div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="../img/login/login.png" alt="IMG">
            </div>    
    <form class="login100-form validate-form" method="post" action="">
                <span class="login100-form-title">
                    Member Login
                </span>

                <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="useremail" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" data-validate="Password is required">
                    <input class="input100" type="password" name="userpass" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>
                <div class="container-login100-form-btn">
                    <button class="login100-form-btn" type="submit">
                        Login
                    </button>
                </div>
                <div class="text-center p-t-12">
                    <span class="txt1">
                        Forgot
                    </span>
                    <a id="a-login" class="txt2" href="#">
                        Username / Password?
                    </a>
                </div>

                <div class="text-center p-t-136">
                    <a id="a-login" class="txt2" href="../html/register.php">
                        Create your Account
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
    </form>
</div>
</div>
</div>
<!-- Check login -->
<?php
include_once("../database/connect.php");
$user = @$_REQUEST["useremail"];
$pass = @$_REQUEST["userpass"];

  session_start();

  $sql = "SELECT * FROM users WHERE typeUsers='2001' or typeUsers='2002'";

  $result = mysqli_query($connect, $sql);

  if (mysqli_num_rows($result) > 0) 
  {
      while($row = mysqli_fetch_assoc($result)) {
          if($row["email"] === $user && $row["password"] === $pass)
          {
            $_SESSION["username"] = $row["name"];
              header("Location: profile.php");
          }
      }
  } 
?>
</body>
</html>