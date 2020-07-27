<?php
    if(!isset($_SESSION))
    {
        session_start();
        ob_start();
    }  
?>

<head><link rel="stylesheet" href="../css/cart.css" type="text/css" /> </head>

<?php require "header.php"; ?>

<div class="container" id="cart">

<?php 
    function delPro($protodel) {
        unset($_SESSION['cart'][$protodel]);
    }
    if (isset($_POST['delPro'])) {
        $fdpro = $_POST['delPro'];
        delPro($fdpro);
    }
?>

<section class="jumbotron text-center">
    <div class="container">
        <h1 class="jumbotron-heading">Giỏ hàng</h1>
     </div>
</section>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Sản phẩm</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col" class="text-center">Số lượng</th>
                            <th scope="col" class="text-right">Giá sản phẩm</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php 
                    if(isset($_SESSION['cart'])){
                    foreach($_SESSION['cart'] as $oneproduct){?>
                        <tr>
                            <td><img class="item-cart" src="<?php echo($oneproduct['image']); ?>" /> </td>
                            <td><?php echo($oneproduct['name']); ?></td>
                            <td>Còn hàng</td>
                            <td><input class="form-control" type="number" value="1" /></td>
                            <td class="text-right"><?php echo($oneproduct['price']); ?></td>
                            <td class="text-right">
                            <form method="POST" action="">
                            <input type="hidden" name="delPro" value="<?php echo($oneproduct['id']);?>"/>
                            <button type="submit" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                            </td>
                        </tr>
                    </tbody>
                    <?php 
                    }
                    } else
                    {
                        echo('Bạn chưa có sản phẩm nào trong giỏ hàng!');
                    }
                    ?>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a href="cusproduct.php?type=all"><button class="btn btn-block btn-light">Tiếp tục mua sắm</button></a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <a href="../html/payment.php"><button class="btn btn-lg btn-block btn-success text-uppercase">Mua hàng</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<?php require "footer.php"; ?>

<?php
     ob_end_flush();
?>
</body>