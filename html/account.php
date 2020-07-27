<head>
    <link rel="stylesheet" href="../css/account.css" type="text/css" />
</head>
<?php
    require "header.php";
?>
<body>
    <div class="container" id="account">
    <h1 id="title">Chào mừng bạn đến với linh kiện 000</h1>
    <hr/>
    <h5 id="title2">Vui lòng đăng nhập hoặc đăng ký để mua hàng và sử dụng dịch vụ của 000</h5>
    <h6 id="title3">Xin cảm ơn</h6>
    <hr/>
    <div class="row">
        <div class="col-md-6">
            <button class="btn btn-success btn-circle"><a id="link" href="./login.php">Đăng nhập</a></button>
        </div>
        <div class="col-md-6">
            <button class="btn btn-danger btn-circle"><a id="link" href="./register.php">Đăng ký</a></button>
        </div>
    </div>
    </div>
<?php require "footer.php"; ?>
</body>

