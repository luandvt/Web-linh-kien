<head><link rel="stylesheet" href="../css/cart.css" type="text/css" /> </head>

<?php require "header.php"; ?>

<div class="container" id="cart">

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
                            <th scope="col" class="text-right">Thành tiền</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img class="item-cart" src="../img/product/CPU/i9-10900x/1.jpg" /> </td>
                            <td>CPU Intel Core i9 - 10900x </td>
                            <td>Còn hàng</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">17.000.000 đ</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <tr>
                            <td><img class="item-cart" src="../img/product/Mainboard/A-H310/1.jpg" /> </td>
                            <td>Mainboard MSI H310</td>
                            <td>Còn hàng</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">3.950.000 đ</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <tr>
                            <td><img class="item-cart" src="../img/product/ram/d4-16-corsair/1.jpg" /> </td>
                            <td>Ram Corsair DDR4 16Gb</td>
                            <td>Còn hàng</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">2.300.000 đ</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Thành tiền </td>
                            <td class="text-right">23.250.000 đ</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td>Phí vận chuyển</td>
                            <td class="text-right"> Miễn phí </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Tổng cộng</strong></td>
                            <td class="text-right"><strong>23.250.000 đ</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <a href="../html/product.php"><button class="btn btn-block btn-light">Tiếp tục mua sắm</button></a>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <a href="../html/payment.php"><button class="btn btn-lg btn-block btn-success text-uppercase">Thanh toán</button></a>
                </div>
            </div>
        </div>
    </div>
</div>

</div>
<?php require "footer.php"; ?>
</body>