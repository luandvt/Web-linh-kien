<!doctype html>
<html lang="en">
<head>
    <link rel="stylesheet" href="./css/show.css" type="text/css" />
</head>

<body>
<?php 
include_once("../database/connect.php");

$sql = "SELECT * FROM product";
$result = mysqli_query($connect, $sql);

if (mysqli_num_rows($result) > 0) 
{
} 
else {
    echo "Không có dữ liệu từ database";
}
?>
<div class="row">
<?php 
while ($row = mysqli_fetch_array($result)){
    $pimage1 = "../product/image/".$row['image1'];
    $pimage2 = "../product/image/".$row['image2'];
    $pname = $row['name'];
    $pprice = $row['price'];
?>
        <div class="col-md-2 col-sm-6">
            <div class="product-grid3">
                <div class="product-image3">
                    <a href="#">
                        <img class="pic-1" src="<?php echo($pimage1);?>"> 
                        <img class="pic-2" src="<?php echo($pimage2);?>">
                    </a>
                    <ul class="social">
                        <li><a href="#"><i class="fa fa-shopping-bag"></i></a></li>
                        <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
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
</body>
<html>