<!DOCTYPE html>
<html lang="en">
<?php include_once("layout.php"); ?>
<head>
    <link rel="stylesheet" href="./css/all.css" type="text/css" />
</head>

<body>
<div class="right_col" role="main">
    <h1>Tất cả sản phẩm</h1>
    <!-- Lọc -->
    <form method="post" action="">
        <div class="row" id="filter">
            <div class="col-md-3">
                <label for="exampleFormControlSelect1">Chuyên mục</label>
                <select class="form-control" id="exampleFormControlSelect1" name="flistid">
                    <option value="all">Tất cả sản phẩm</option>
                    <option value="sp01">Mainboard</option>
                    <option value="sp02">Bộ xử lý (CPU)</option>
                    <option value="sp03">Ram</option>
                    <option value="sp04">Ổ cứng</option>
                    <option value="sp05">Nguồn</option>
                    <option value="sp06">Case</option>
                    <option value="sp07">Card màn hình</option>
                    <option value="sp08">Linh kiện khác</option>
                </select>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-3">
                <label for="exampleFormControlSelect1">Id sản phẩm</label>
                <div><input id="idfilter" type="text" placeholder="Lọc ID sản phẩm" name="idfilter"/></div>
            </div>
            <div class="col-md-3">
                <label for="exampleFormControlSelect1">Tên sản phẩm</label>
                <div><input id="idfilter" type="text" placeholder="Lọc tên sản phẩm" name="namefilter"/></div>
            </div>
            <div class="col-md-1">
                 <label for="exampleFormControlSelect1"></label>
                <div><button type="submit" class="btn btn-success">Lọc</button></div>
            </div>
        </div>
    </form>
    <!-- Hết lọc -->
    <hr/>
<?php include_once("product-data.php");?>
</div>
<?php include_once("script.php"); ?>

<?php 

?>
</body>
</html>