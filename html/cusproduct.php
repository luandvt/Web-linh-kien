<?php 
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<head>
    <link rel="stylesheet" href="../css/product.css" type="text/css" />
    <link rel="stylesheet" href="../css/show-list-product.css" type="text/css" />
    <script type=”text/javascript” src=”http://code.jquery.com/jquery-2.0.3.min.js”></script> 
</head>

<?php require "header.php";?>

<?php
    $title = '';
    
    if($_SERVER["REQUEST_METHOD"] == "GET") {
        $type = $_GET['type'];
        $title = $type;
        $list = '';
        switch ($type) {
            case 'all':
                $list = 'list_id IS NOT NULL';
                $title = 'Tất cả sản phẩm';
            break;
            case 'mainboard':
                $list = "list_id = 'sp01'";
                $title = 'Mainboard';
            break;
            case 'cpu':
                $list = "list_id = 'sp02'";
                $title = 'Bộ xử lý trung tâm - CPU';
            break;
            case 'ram':
                $list = "list_id = 'sp03'";
                $title = 'Ram';
            break;
            case 'harddrive':
                $list = "list_id = 'sp04'";
                $title = 'Ổ cứng';
            break;
            case 'psu':
                $list = "list_id = 'sp05'";
                $title = 'Nguồn máy tính - PSU';
            break;
            case 'case':
                $list = "list_id = 'sp06'";
                $title = 'Vỏ máy tính - Case';
            break;
            case 'gpu':
                $list = "list_id = 'sp07'";
                $title = 'Card màn hình rời';
            break;
            case 'another':
                $list = "list_id = 'sp08'";
                $title = 'Các loại linh kiện khác';
            break;
        }
        $_SESSION["list"] = $list;
        $sql = "SELECT * FROM product WHERE $list";
    }
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $title = 'Kết quả tìm kiếm:';
        $search = '';
        $sort = 'null';        
        $sql = "SELECT * FROM product";
        if(isset($_POST["fsearch"]))
        {
            $search = $_POST["fsearch"];
            $searchquery = "name like '%$search%'";
            $_SESSION["list"] = $searchquery;
            $sql = "SELECT * FROM product WHERE $searchquery";
        }
        $list = $_SESSION["list"];
        if(isset($_POST["sort"]))
        {
            $sort = $_POST["sort"];
            if($sort == "null")
            {
                $sql = "SELECT * FROM product WHERE $list";
            }
            if($sort == "asc")
            {
                $sql = "SELECT * FROM product WHERE $list ORDER BY price";
            }
            if($sort == "desc")
            {
                $sql = "SELECT * FROM product WHERE $list ORDER BY price DESC";
            }
            if($sort == "type")
            {
                $sql = "SELECT * FROM product WHERE $list ORDER BY list_id";
            }
        };
    }
?>

<div class="container" id="product">
<hr/>
<h3 class="h3" id="product-lable"><?php echo($title);?></h3><br/>
<div id="searchform">
    <form method="post" action="">
        <div class="row">
            <div class="col-md-2 form-group">
                <h6>Sắp xếp:</h6>
                <select class="form-control" id="sort" name="sort">
                    <option value="null">Không</option>
                    <option value="asc">Giá tăng dần</option>
                    <option value="desc">Giá giảm dần</option>
                    <option value="type">Loại linh kiện</option>
                </select>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <h6>Lọc theo giá:</h6>
                <div class="row">
                    <div class="col-md-5.5">
                        <input type="number" placeholder="Thấp nhất..." name="min">
                    </div>
                    <div class="col-md-1">-</div>
                    <div class="col-md-5.5">
                        <input type="number" placeholder="...Cao nhất" name="max">
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <lable> - </lable>
                <div><button type="submit" class="btn btn-success">Lọc</button></div>
            </div>
        </div>
    </form>
</div>
<hr/>

<div>
<?php 
include_once("../database/connect.php");

$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) < 0) 
{
} 
else {
    
}
?>
<div class="row">
<?php 
while ($row = mysqli_fetch_array($result)){
    $pimage1 = "../product/image/".$row['image1'];
    $pimage2 = "../product/image/".$row['image2'];
    $pimage3 = "../product/image/".$row['image3'];
    $pname = $row['name'];
    $pid = $row['product_id'];
    $pdetail = $row['detail'];
    $pprice = $row['price'];
?>
        <div class="col-md-3 col-sm-6">
            <div class="product-grid3">
                <div class="product-image3">
                    <!-- <a href="#"> -->
                        <img class="pic-1" src="<?php echo($pimage1);?>"> 
                        <img class="pic-2" src="<?php echo($pimage2);?>">
                    <!-- </a> -->
                    <ul class="social">
                        <li>
                            <form id="fdetail" method="POST" action="./detail.php" name="detail">
                                <input type="hidden" id="pname" name="pname" value="<?php echo($pname)?>"/>
                                <input type="hidden" id="pid" name="pid" value="<?php echo($pid)?>"/>
                                <input type="hidden" id="pdetail" name="pdetail" value="<?php echo($pdetail)?>"/>
                                <input type="hidden" id="pimage1" name="pimage1" value="<?php echo($pimage1)?>"/>
                                <input type="hidden" id="pimage2" name="pimage2" value="<?php echo($pimage2)?>"/>
                                <input type="hidden" id="pimage3" name="pimage3" value="<?php echo($pimage3)?>"/>
                                <input type="hidden" id="pprice" name="pprice" value="<?php echo($pprice)?>"/>
                                <button class="btn btn-success btn-circle btn-lg"type="submit"><i id="icon-link" class="fa fa-info"></i></button>
                            </form>
                        </li>
                        <li>
                            <form id="fcart" method="POST" action="./processcart.php" name="fcart">
                                <input type="hidden" id="pname" name="pname" value="<?php echo($pname)?>"/>
                                <input type="hidden" id="pid" name="pid" value="<?php echo($pid)?>"/>
                                <input type="hidden" id="pimage1" name="pimage1" value="<?php echo($pimage1)?>"/>
                                <input type="hidden" id="pprice" name="pprice" value="<?php echo($pprice)?>"/>
                                <button class="btn btn-info btn-circle" type="submit"><i id="icon-link" class="fa fa-shopping-cart"></i></button>
                            </form>
                        </li>
                    </ul>  
                </div>
                
                <div class="product-content">
                    <h3 class="title"><a href="#"><?php echo($pname);?></a></h3>
                    <div class="price">
                        <?php echo number_format($pprice); echo(' $');?>
                    </div>
                </div>
            </div>
        </div>  
<?php };?>
</div>
</div>
<hr/>
<!-- footer -->
<?php require "footer.php"; ?>
</body>