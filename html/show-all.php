<head> 
    <link rel="stylesheet" href="../css/show-all.css" type="text/css" />
    <link rel="stylesheet" href="../css/slide-product.css" type="text/css" />
</head>

<?php require "header.php" ?>

<div class="container" id="show-all">

<h3 class="h3" id="head-lable">Mainboard</h3>
<hr/>
<div id="view-bar">
    <div id="btnContainer">
        <button class="btn" id="list"><i class="fa fa-bars"></i> List</button> 
        <button class="btn" id="grid"><i class="fa fa-th-large"></i> Grid</button>
        <button id="filter-dropdown"><i class="fa fa-filter"></i><i class="fa fa-caret-down" aria-hidden="true"></i></button>   
    </div>
</div>

<hr/>

    <div id="products" class="row view-group">
                <div class="item col-xs-4 col-lg-4">
                    <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="../img/product/Mainboard/A-H310/1.jpg" alt="" />
                        </div>
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading">
                                Test title</h4>
                            <p class="group inner list-group-item-text">
                                Test detail</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        $21.000</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-xs-4 col-lg-4">
                    <div class="thumbnail card">
                    <div class="img-event">
                            <img class="group list-group-image img-fluid" src="../img/product/Mainboard/A-H310/1.jpg" alt="" />
                        </div>
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading">
                                Test title</h4>
                            <p class="group inner list-group-item-text">
                                Test detail</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        $21.000</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-xs-4 col-lg-4">
                    <div class="thumbnail card">
                        <div class="img-event">
                            <img class="group list-group-image img-fluid" src="../img/product/Mainboard/A-H310/1.jpg" alt="" />
                        </div>
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading">
                                Test title</h4>
                            <p class="group inner list-group-item-text">
                                Test detail</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        $21.000</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-xs-4 col-lg-4">
                    <div class="thumbnail card">
                    <div class="img-event">
                            <img class="group list-group-image img-fluid" src="../img/product/Mainboard/A-H310/1.jpg" alt="" />
                        </div>
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading">
                                Test title</h4>
                            <p class="group inner list-group-item-text">
                                Test detail</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        $21.000</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-xs-4 col-lg-4">
                    <div class="thumbnail card">
                    <div class="img-event">
                            <img class="group list-group-image img-fluid" src="../img/product/Mainboard/A-H310/1.jpg" alt="" />
                        </div>
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading">
                                Test title</h4>
                            <p class="group inner list-group-item-text">
                                Test detail</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        $21.000</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item col-xs-4 col-lg-4">
                    <div class="thumbnail card">
                    <div class="img-event">
                            <img class="group list-group-image img-fluid" src="../img/product/Mainboard/A-H310/1.jpg" alt="" />
                        </div>
                        <div class="caption card-body">
                            <h4 class="group card-title inner list-group-item-heading">
                                Test title</h4>
                            <p class="group inner list-group-item-text">
                                Test detail</p>
                            <div class="row">
                                <div class="col-xs-12 col-md-6">
                                    <p class="lead">
                                        $21.000</p>
                                </div>
                                <div class="col-xs-12 col-md-6">
                                    <a class="btn btn-success" href="#">Add to cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>

<?php require "footer.php" ?>
<script>
$(document).ready(function() {
            $('#list').click(function(event){event.preventDefault();$('#products .item').addClass('list-group-item');});
            $('#grid').click(function(event){event.preventDefault();$('#products .item').removeClass('list-group-item');$('#products .item').addClass('grid-group-item');});
        });
</script>
</body>