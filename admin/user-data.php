<head> <link rel="stylesheet" href="./css/oder-data.css" type="text/css" /> </head>
<div class="row" id="toprow">
    <div class="col-md-1 td">ID user</div>
    <div class="col-md-2 td">Tên</div>
    <div class="col-md-2 td">Email</div>
    <div class="col-md-3 td">Địa chỉ</div>
    <div class="col-md-1 td">Số điện thoại</div>
    <div class="col-md-1 td">Loại user</div>
</div>
<?php
include_once("../database/connect.php");

$sql = "SELECT * FROM users";
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
        <div class="col-md-1 td"><?php echo($row['user_id']);?></div>
        <div class="col-md-2 td"><?php echo($row['name']);?></div>
        <div class="col-md-2 td"><?php echo($row['email']);?></div>
        <div class="col-md-3 td"><?php echo($row['address']);?></div>
        <div class="col-md-1 td"><a href=#><?php echo($row['phonenum']);?></a></div>
        <div class="col-md-1 td"><?php echo($row['typeUsers']);?></div>
    </div>

<?php }; ?>
<?php mysqli_close($connect); ?>
