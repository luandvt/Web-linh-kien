<head>
    <link rel="stylesheet" href="../css/home.css" type="text/css" />
    <link rel="stylesheet" href="../css/slide-product.css" type="text/css" />
</head>
<?php
    require "header.php";
?>

<div class="container" id="home">
<br/>
<main class="main">
<div class="container">
<div class="row">
    <div class="d-none d-md-block d-lg-block d-xl-block col-md-3">
        <div class="list-group" id="price-list">
            <a href="#" class="list-group-item list-group-item-action">Giới thiệu (About)</a>
            <a href="#" class="list-group-item list-group-item-action">Bảng giá tất cả sản phẩm</a>
            <a href="#" class="list-group-item list-group-item-action">Chính sách bán hàng</a>
            <a href="#" class="list-group-item list-group-item-action">Tư vấn cấu hình</a>     
            <a href="#" class="list-group-item list-group-item-action">Liên hệ</a>
            <a href="#" class="list-group-item list-group-item-action">Phản hồi</a>
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-9">
        <div class="carousel slide" id="baner-slide" data-ride="carousel">
            <ul class="carousel-indicators">
                <li data-target="#slides" data-slide-to="0" class="active"></li>
                <li data-target="#slides" data-slide-to="1"></li>
                <li data-target="#slides" data-slide-to="2"></li>
                <li data-target="#slides" data-slide-to="3"></li>
                <li data-target="#slides" data-slide-to="4"></li>
            </ul>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="../img/Banner/0.jpg">
                </div>
                <div class="carousel-item">
                    <img src="../img/Banner/1.jpg">
                </div>
                <div class="carousel-item">
                    <img src="../img/Banner/2.jpg">
                </div>
                <div class="carousel-item">
                    <img src="../img/Banner/3.jpg">
                </div>
                <div class="carousel-item">
                    <img src="../img/Banner/4.jpg">
                </div>
                <a class="carousel-control-prev" href="#baner-slide" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#baner-slide" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<!--  -->
<hr/>
<!--New product demo-->
<div class="container">
    <h3 class="h3">Sản phẩm mới</h3>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid3">
                <div class="product-image3">
                    <a href="#">
                        <img class="pic-1" src="../img/product/Mainboard/A-Z370/1.jpg">
                        <img class="pic-2" src="../img/product/Mainboard/A-Z370/2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-label">New</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Mainboard MSI Z370</a></h3>
                    <div class="price">
                        3.950.000 đ
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid3">
                <div class="product-image3">
                    <a href="#">
                        <img class="pic-1" src="../img/product/CPU/i9-10900x/1.jpg">
                        <img class="pic-2" src="../img/product/CPU/i9-10900x/2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-label">New</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Intel I9 10900x</a></h3>
                    <div class="price">
                        17.000.000 đ
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid3">
                <div class="product-image3">
                    <a href="#">
                        <img class="pic-1" src="../img/product/Ram/d4-16-corsair/1.jpg">
                        <img class="pic-2" src="../img/product/Ram/d4-16-corsair/2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-label">New</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Ram PC Corsair 16 Gb - DDR4</a></h3>
                    <div class="price">
                        2.300.000 đ
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid3">
                <div class="product-image3">
                    <a href="#">
                        <img class="pic-1" src="../img/product/GPU/msi-2060-6gb/1.jpg">
                        <img class="pic-2" src="../img/product/GPU/msi-2060-6gb/2.png">
                    </a>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-label">New</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">MSI RTX 2060 - 6GB</a></h3>
                    <div class="price">
                        12.500.000 đ
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<hr class="container" />

<!-- Sản phẩm bán chạy -->

<div class="container">
    <h3 class="h3">Sản phẩm bán chạy</h3>
    <div class="row">
        <div class="col-md-3 col-sm-6">
            <div class="product-grid3">
                <div class="product-image3">
                    <a href="#">
                        <img class="pic-1" src="../img/product/GPU/msi-2060-6gb/1.jpg">
                        <img class="pic-2" src="../img/product/GPU/msi-2060-6gb/2.png">
                    </a>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-label">Best<br />selling</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">MSI RTX 2060 - 6GB</a></h3>
                    <div class="price">
                        12.500.000 đ
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid3">
                <div class="product-image3">
                    <a href="#">
                        <img class="pic-1" src="../img/product/GPU/asus-rog-strix-5700-8gb/1.jpg">
                        <img class="pic-2" src="../img/product/GPU/asus-rog-strix-5700-8gb/2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-label">Best<br />selling</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Asus ROG Strix 5700 - 8GB</a></h3>
                    <div class="price">
                        12.080.000 đ
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid3">
                <div class="product-image3">
                    <a href="#">
                        <img class="pic-1"
                            src="../img/product/another/Water radiator/Deepcool Gammaxx L240 V2/1.jpg">
                        <img class="pic-2"
                            src="../img/product/another/Water radiator/Deepcool Gammaxx L240 V2/2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-label">Best<br />selling</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Asus ROG Strix 5700 - 8GB</a></h3>
                    <div class="price">
                        1.990.000 đ
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid3">
                <div class="product-image3">
                    <a href="#">
                        <img class="pic-1" src="../img/product/Mainboard/A-H310/1.jpg">
                        <img class="pic-2" src="../img/product/Mainboard/A-H310/2.jpg">
                    </a>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                    <span class="product-label">Best<br />selling</span>
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">Asus ROG Strix 5700 - 8GB</a></h3>
                    <div class="price">
                        2.390.000 đ
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<hr class="container" />

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6" id="map">
            <h3 class="h3">Chỉ dẫn đường đi</h3>
            <iframe id="ggmap"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.655819588474!2d106.68040551474878!3d10.760986792331991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1b8e6575c3%3A0x48d253bde1931e59!2zxJDhuqFpIGjhu41jIFPGsCBQaOG6oW0!5e0!3m2!1svi!2sus!4v1591251698080!5m2!1svi!2sus"
                width="100%" height="100%" frameborder="0" style="border:1;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>
        <div class="d-block d-sm-none">
            <hr class="container" />
        </div>
        <div class="col-xs-12 col-md-6">
            <h3 class="h3">Về chúng tôi</h3>
            <div id="about-us">
                <ul id="link-about">
                    <li>
                        <h5 class="h5"><a href="#gioithieu">Giới thiệu linh kiện 000</a></h5>
                    </li>
                    <li>
                        <h5 class="h5"><a href="#lienhe">Thông tin liên hệ</a>
                    </li>
                    <li>
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">
                                    <h5 class="h5">Nhận thông tin mới nhất qua email:</h5><br />
                                </label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Enter email">
                            </div>
                            <button type="submit" class="btn btn-primary">Gửi ngay</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
</main>
</div>
<?php require "footer.php"; ?>
</body>