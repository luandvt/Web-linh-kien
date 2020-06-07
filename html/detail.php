<head> <link rel="stylesheet" href="../css/detail.css" type="text/css" /> </head>

<?php require "header.php"; ?>

<div class="container" id="detail">
<h3 class="h3" id="name-product">Product name</h3>
<i id="sku">-SKU:#00000000</i>
<hr/>
    <!-- Head detail product -->
    <div class="row">
        <!-- Slide image product -->
        <div class="col-md-5 col-sm-12 col-xs-12">
            <div class="carousel slide" id="item-slide">
                <ol class="carousel-indicators">
                    <li data-target="#slides" data-slide-to="0" class="active"></li>
                    <li data-target="#slides" data-slide-to="1"></li>
                    <li data-target="#slides" data-slide-to="2"></li>
                    <li data-target="#slides" data-slide-to="3"></li>
                    <li data-target="#slides" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="../img/product/GPU/asus-rog-strix-5700-8gb/1.jpg">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/product/GPU/asus-rog-strix-5700-8gb/2.jpg">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/product/GPU/asus-rog-strix-5700-8gb/1.jpg">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/product/GPU/asus-rog-strix-5700-8gb/2.jpg">
                    </div>
                    <div class="carousel-item">
                        <img src="../img/product/GPU/asus-rog-strix-5700-8gb/1.jpg">
                    </div>
                    <a class="carousel-control-prev" href="#item-slide" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#item-slide" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
        <div class=".d-none .d-md-block .d-lg-none col-md-1">

        </div>
        <!-- Detail -->
        <div class="col-xs-12 col-sm-12 col-md-6">
            <!-- Star -->
            <div> 
                <i class="fa fa-star fa-2x text-primary" id="star"></i>
                <i class="fa fa-star fa-2x text-primary" id="star"></i>
                <i class="fa fa-star fa-2x text-primary" id="star"></i>
                <i class="fa fa-star fa-2x text-primary" id="star"></i>
                <i class="fa fa-star fa-2x text-muted" id="star"></i>
                <span class="fa fa-2x"><h5>(109) Votes</h5></span>
                <a href="#review">109 customer reviews</a>
            </div>
            <hr/>
            <div id="tab-detail">Mô tả sản phẩm</div>
            <hr/>
            <button type="button" class="btn btn-success">Mua ngay</button>
            <button type="button" class="btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true" ></i> Thêm vào giỏ hàng</button>
        </div>
    </div>
    <hr/>
    <!-- Full detail -->
    <div id="full-detail">
        <div id="full-detail">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link in active" data-toggle="tab" href="#intro" role="tab">Giới thiệu sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#specifications" role="tab">Thông số chi tiết</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Đánh giá</a>
                </li>
            </ul>

        <!-- Tab panes {Fade}  -->
        <div class="tab-content">
            <div class="tab-pane fade in active" id="intro" name="intro" role="tabpanel">
                <div class="bs-callout bs-callout-danger">
                    Test tab 1
                </div>
            </div>
            <div class="tab-pane fade" id="specifications" role="tabpanel">
                <div class="bs-callout bs-callout-danger" id="certifications" name="certifications">
                    Test tab 2
                </div>
            </div>
            <div class="tab-pane fade" id="reviews" role="tabpanel">
                <div class="bs-callout bs-callout-danger" id="certifications" name="certifications">
                    Test tab 3
                </div>
            </div>
        </div>
    </div>
    <hr/>
</div>
<?php require "footer.php" ?>
</body>