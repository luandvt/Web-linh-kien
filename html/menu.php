<!doctype html>
<head>
    <link rel="stylesheet" href="../css/menu.css" type="text/css" /> 
</head>

<!-- Nav bar -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
            <!-- Logo -->
            <a class="navbar-brand" href="../html/home.php"><img id="logo" src="../img/logo000.png" alt="Logo 000"></a>
            <!-- Responsive button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <!-- Form search -->
                        <form class="form-inline" method="POST" action="./cusproduct.php">
                            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="fsearch">
                            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                <svg class="bi bi-search" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z"/>
                <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
              </svg>
            </button>
                        </form>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="../html/home.php">Trang chủ </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Danh mục sản phẩm
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" id="product-xs-menu">
                            <a href="cusproduct.php?type=all" class="dropdown-item ">Tất cả sản phẩm</a>
                            <a href="cusproduct.php?type=mainboard" class="dropdown-item ">Mainboard</a>
                            <a href="cusproduct.php?type=cpu" class="dropdown-item ">Bộ xử lý (CPU)</a>
                            <a href="cusproduct.php?type=ram" class="dropdown-item ">Ram</a>
                            <a href="cusproduct.php?type=harđrive" class="dropdown-item ">Ổ cứng</a>
                            <a href="cusproduct.php?type=psu" class="dropdown-item ">Nguồn</a>
                            <a href="cusproduct.php?type=case" class="dropdown-item ">Case</a>
                            <a href="cusproduct.php?type=gpu" class="dropdown-item ">Card màn hình (GPU)</a>
                            <a href="cusproduct.php?type=another" class="dropdown-item ">Linh kiện khác</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../html/cart.php">Giỏ hàng </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./check-account.php">
                            Tài khoản
                        </a>
                    </li>
                </ul>
            </div>
        </nav>