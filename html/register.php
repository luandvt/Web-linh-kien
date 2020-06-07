<head>
    <link rel="stylesheet" type="text/css" href="../css/login/util.css">
    <link rel="stylesheet" type="text/css" href="../css/login/main.css">
    <link rel="stylesheet" type="text/css" href="../css/login/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="../css/login/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../css/login/animate.css">
</head>

<?php require "header.php"; ?>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="../img/login/login.png" alt="IMG">
            </div>

            <form class="login100-form validate-form">
                <span class="login100-form-title">
                    Sign Up Now
                </span>

                <div class="wrap-input100 validate-input" >
                    <input class="input100" type="text" name="email" placeholder="Email">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" >
                    <input class="input100" type="password" name="pass" placeholder="Password">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="wrap-input100 validate-input" >
                    <input class="input100" type="password" name="pass" placeholder="RePassword">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                    </span>
                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Register
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
                    <a id="a-login" class="txt2" href="../html/login.php">
                        Login
                        <i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
                    </a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php require "footer.php"; ?>

<!--===============================================================================================-->
<script src="../bootstrap/js/popper.js"></script>    
<script src="../jQuery/select2.min.js"></script>
<!-- <script src="../jQuery/login/tilt.jquery.min.js"></script> -->
<!-- <script>
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<script src="../jQuery/login/login.js"></script> -->
<!--================================================================================================-->   
</body>