<head> <link rel="stylesheet" href="./css/oder-data.css" type="text/css" /> </head>
<div class="row" id="toprow">
    <div class="col-md-1 td">ID</div>
    <div class="col-md-2 td">Tên list</div>
    <div class="col-md-2 td">Tên </div>
    <div class="col-md-3 td">Thông tin</div>
    <div class="col-md-1 td">Giá</div>
    <div class="col-md-1 td">Hình ảnh</div>
</div>
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
<?php while ($row = mysqli_fetch_array($result)){?>
    <div class="row" id="row2">
        <div class="col-md-1 td"><?php echo($row['product_id']);?></div>
        <div class="col-md-2 td"><?php echo($row['list_id']);?></div>
        <div class="col-md-2 td"><?php echo($row['name']);?></div>
        <div class="col-md-3 td"><?php echo($row['detail']);?></div>
        <div class="col-md-1 td"><?php echo($row['price']);?></div>
        <div class="col-md-1 td"><a href=#><img src="<?php echo($row['image1']);?>"/></a></div>
    </div>

<?php }; ?>
<?php mysqli_close($connect); ?>
