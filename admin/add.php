<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="icon" href="../img/logo000.png" type="image/ico" />

    <title>Linh kiện 000</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link rel="stylesheet" href="./css/maps/add.css" type="text/css" />
  </head>

  <body>
    <?php include_once("layout.php"); ?>
    <div class="right_col" role="main">
      <h1>Thêm mới sản phẩm</h1>
      <hr/>
        <div id="form-insert">
          <form method="post" action="./add-process.php" name="add-product-form" enctype="multipart/form-data">
            <div class="row" id="row1">
            <div class="col-md-2 form-group">
                <label for="exampleFormControlSelect1">Chuyên mục</label>
                <select class="form-control" id="exampleFormControlSelect1" name="flistid">
                  <option value="sp01">1 - Mainboard</option>
                  <option value="sp02">2 - Bộ xử lý (CPU)</option>
                  <option value="sp03">3 - Ram</option>
                  <option value="sp04">4 - Ổ cứng</option>
                  <option value="sp05">5 - Nguồn</option>
                  <option value="sp06">6 - Case</option>
                  <option value="sp07">7 - Card màn hình</option>
                  <option value="sp08">8 - Linh kiện khác</option>
                </select>
              </div>
              <div id="space" class="col-md-1"></div>
                <div class="col-md-4" id="name-product">
                  <label for="exampleFormControlSelect1">Tên sản phẩm</label>
                  <input class="form-control" type="text" placeholder="Nhập tên sản phẩm" name="fnameproduct" required>
                </div>
              <div id="space" class="col-md-1"></div>
                <div class="col-md-3" id="name-product">
                    <label for="exampleFormControlSelect1">ID sản phẩm</label>
                    <input class="form-control" type="text" placeholder="Nhập id sản phẩm" name="fidproduct" required>
                </div>
                <div id="space" class="col-md-1"></div>
            </div>
            <hr/>
            <label for="exampleFormControlSelect1">Thông tin chi tiết</label>
            <div class="row" id="row2">
              <div id="space" class="col-md-0.5"></div>
              <div class="input-group col-md-10">
                <textarea id="details" class="form-control" aria-label="With textarea" name="fdetails"></textarea>
              </div>
              <div id="space" class="col-md-1"></div>
            </div>
            <hr/>
            <label for="exampleFormControlSelect1">Giá sản phẩm</label>
            <div class="row" id="row2">
              <div id="space" class="col-md-0.5"></div>
              <div class="input-group col-md-5">
                <input class="form-control" type="number" min="1000" placeholder="Giá sản phẩm" name="fpriceproduct" required>
              </div>
              <div id="space" class="col-md-1"></div>
                <div class="form-group form-check col-md-2.5">
                  <input name="fnew" type="checkbox" class="form-check-input" id="exampleCheck1" value="new"> New
                </div>
              <div id="space" class="col-md-1"></div>
              <div class="form-group form-check col-md-2.5">
                <input name="fhot" type="checkbox" class="form-check-input" id="exampleCheck1" value="hot"> Hot
              </div>
              <div id="space" class="col-md-0.5"></div>
            </div>
            <hr/>
            <h2>Upload hình ảnh</h2>
            <div class="row" id="img1">\
                <div class="col-md-1"></div>
                <div class="col-md-1"><h4>Hình 1:</h4></div>
                <div class="col-md-6">
                  <input type="file" name="fimage1">
                </div>
            </div>
            <div class="row" id="img2">\
                <div class="col-md-1"></div>
                <div class="col-md-1"><h4>Hình 2:</h4></div>
                <div class="col-md-6">
                  <input type="file" name="fimage2">
                </div>
            </div>
            <div class="row" id="img3">\
                <div class="col-md-1"></div>
                <div class="col-md-1"><h4>Hình 3:</h4></div>
                <div class="col-md-6">
                  <input type="file" name="fimage3">
                </div>
            </div>
            <hr/>
            <button type="submit" class="btn btn-primary mb-2" onclick="alert('Thêm sản phẩm thành công')">Thêm sản phẩm</button>
            <button type="reset" class="btn btn-secondary">Nhập lại toàn bộ</button>
          </form>
        </div>
    </div>
    <?php include_once("script.php"); ?>
  </body>
