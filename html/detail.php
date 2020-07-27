<?php
    if(!isset($_SESSION))
    {
        session_start();
        ob_start();
    }  
?>
<head> <link rel="stylesheet" href="../css/detail.css" type="text/css" /> </head>

<?php require "header.php"; ?>

<?php 
    $name='thu coi';
    $product_id='10001';
    $image1 = '../img/logo000.png';
    $image2 = '../img/logo000.png';
    $image3 = '../img/logo000.png';
    $details = 'This is details of product!';
    $price = '120000';
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["pname"])) { $name = $_POST["pname"]; }
        if(isset($_POST["pid"])) { $product_id = $_POST["pid"]; }
        if(isset($_POST["pdetail"])) { $details = $_POST["pdetail"]; }
        if(isset($_POST["pimage1"])) { $image1 = $_POST["pimage1"]; }
        if(isset($_POST["pimage2"])) { $image2 = $_POST["pimage2"]; }
        if(isset($_POST["pimage3"])) { $image3 = $_POST["pimage3"]; }
        if(isset($_POST["pprice"])) { $price = $_POST["pprice"]; }
    }
?>


<div class="container" id="detail">
<h3 class="h3" id="name-product"><?php echo($name)?></h3>
<i id="sku">-SKU:#<?php echo($product_id)?></i>
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
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="<?php echo($image1)?>">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo($image2)?>">
                    </div>
                    <div class="carousel-item">
                        <img src="<?php echo($image3)?>">
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
            <div id="tab-detail"><?php echo($details)?></div>
            <hr/>
            <div id="tab-price">Giá sản phẩm (VND): <?php echo number_format($price)?></div>
            <hr/>
            <form id="fcart" method="POST" action="./processcart.php" name="fcart">
                <input type="hidden" id="pname" name="pname" value="<?php echo($name)?>"/>
                <input type="hidden" id="pid" name="pid" value="<?php echo($product_id)?>"/>
                <input type="hidden" id="pimage1" name="pimage1" value="<?php echo($image1)?>"/>
                <input type="hidden" id="pprice" name="pprice" value="<?php echo($price)?>"/>
                <button type="submit" class="btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true" ></i> Thêm vào giỏ hàng</button>
            </form>
            <button type="button" class="btn btn-warning"><a id="return" href="cusproduct.php?type=all"> <i class="fa fa-list" aria-hidden="true" ></i>Xem tiếp sản phẩm khác</a></button>
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
<?php
ob_end_flush();
?>
</body>