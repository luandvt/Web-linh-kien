<?php 
include_once("../database/connect.php");
$aProductId = '';
$aListId = '';
$aProductName = '';
$aProductPrice = '';
$aProductDetail = '';
$aProductNew= 0;
$aProductHot = 0;
$image1 = '';
$image2 = '';
$image3 = '';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["flistid"])) { $aListId = $_POST["flistid"]; }
    if(isset($_POST["fnameproduct"])) { $aProductName = $_POST["fnameproduct"]; }
    if(isset($_POST["fidproduct"])) { $aProductId = $_POST["fidproduct"]; }
    if(isset($_POST["fdetails"])) { $aProductDetail = $_POST["fdetails"]; }
    if(isset($_POST["fpriceproduct"])) { $aProductPrice = $_POST["fpriceproduct"]; }
    if(isset($_FILES["fimage1"]) && $_FILES["fimage1"]["error"] == 0){
        // Mảng chưa định dạng file cho phép
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        // Lấy thông tin file bao gồm tên file, loại file, kích cỡ file
        $filename = $_FILES["fimage1"]["name"];
        $filetype = $_FILES["fimage1"]["type"];
        $filesize = $_FILES["fimage1"]["size"];
    
        // Kiểm tra định dạng file .jpg, png,...
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        // Nếu không đúng định dạng file thì báo lỗi
        if(!array_key_exists($ext, $allowed)) die("Lỗi : Vui lòng chọn đúng định dang file.");
    
        // Cho phép kích thước tối đa của file là 5MB
        $maxsize = 5 * 1024 * 1024;
        // Nếu kích thước lớn hơn 5MB thì báo lỗi
        if($filesize > $maxsize) die("Lỗi : Kích thước file lớn hơn giới hạn cho phép");
    
        // Kiểm tra file ok hết chưa
        if(in_array($filetype, $allowed)){
            // Kiểm tra xem file đã tồn tại chưa, nếu rồi thì báo lỗi, không thì tiến hành upload
            if(file_exists("../product/image/$aProductId.i." . $_FILES["fimage1"]["name"])){
                echo $_FILES["fimage1"]["name"] . " đã tồn tại";
            } else{
                // Hàm move_uploaded_file sẽ tiến hành upload file lên thư mục upload
                move_uploaded_file($_FILES["fimage1"]["tmp_name"], "../product/image/$aProductId.i." . $_FILES["fimage1"]["name"]);
                $image1 = $aProductId.".i.".$filename;
                // Thông báo thành công
            }
        } else{
            echo "Lỗi : Có vấn đề xảy ra khi upload file"; 
        }
    } else{
        echo "Lỗi: " . $_FILES["fimage1"]["error"];
    };
    
    if(isset($_FILES["fimage2"]) && $_FILES["fimage2"]["error"] == 0){
        // Mảng chưa định dạng file cho phép
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        // Lấy thông tin file bao gồm tên file, loại file, kích cỡ file
        $filename = $_FILES["fimage2"]["name"];
        $filetype = $_FILES["fimage2"]["type"];
        $filesize = $_FILES["fimage2"]["size"];
    
        // Kiểm tra định dạng file .jpg, png,...
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        // Nếu không đúng định dạng file thì báo lỗi
        if(!array_key_exists($ext, $allowed)) die("Lỗi : Vui lòng chọn đúng định dang file.");
    
        // Cho phép kích thước tối đa của file là 5MB
        $maxsize = 5 * 1024 * 1024;
        // Nếu kích thước lớn hơn 5MB thì báo lỗi
        if($filesize > $maxsize) die("Lỗi : Kích thước file lớn hơn giới hạn cho phép");
    
        // Kiểm tra file ok hết chưa
        if(in_array($filetype, $allowed)){
            // Kiểm tra xem file đã tồn tại chưa, nếu rồi thì báo lỗi, không thì tiến hành upload
            if(file_exists("../product/image/$aProductId.i." . $_FILES["fimage2"]["name"])){
                echo $_FILES["fimage2"]["name"] . " đã tồn tại";
            } else{
                // Hàm move_uploaded_file sẽ tiến hành upload file lên thư mục upload
                move_uploaded_file($_FILES["fimage2"]["tmp_name"], "../product/image/$aProductId.i." . $_FILES["fimage2"]["name"]);
                $image2 = $aProductId.".i.".$filename;
                // Thông báo thành công
            } 
        } else{
            echo "Lỗi : Có vấn đề xảy ra khi upload file"; 
        }
    } else{
        echo "Lỗi: " . $_FILES["fimage2"]["error"];
    };
    if(isset($_FILES["fimage3"]) && $_FILES["fimage3"]["error"] == 0){
        // Mảng chưa định dạng file cho phép
        $allowed = array("jpg" => "image/jpg", "jpeg" => "image/jpeg", "gif" => "image/gif", "png" => "image/png");
        // Lấy thông tin file bao gồm tên file, loại file, kích cỡ file
        $filename = $_FILES["fimage3"]["name"];
        $filetype = $_FILES["fimage3"]["type"];
        $filesize = $_FILES["fimage3"]["size"];
    
        // Kiểm tra định dạng file .jpg, png,...
        $ext = pathinfo($filename, PATHINFO_EXTENSION);
        // Nếu không đúng định dạng file thì báo lỗi
        if(!array_key_exists($ext, $allowed)) die("Lỗi : Vui lòng chọn đúng định dang file.");
    
        // Cho phép kích thước tối đa của file là 5MB
        $maxsize = 5 * 1024 * 1024;
        // Nếu kích thước lớn hơn 5MB thì báo lỗi
        if($filesize > $maxsize) die("Lỗi : Kích thước file lớn hơn giới hạn cho phép");
    
        // Kiểm tra file ok hết chưa
        if(in_array($filetype, $allowed)){
            // Kiểm tra xem file đã tồn tại chưa, nếu rồi thì báo lỗi, không thì tiến hành upload
            if(file_exists("../product/image/$aProductId.i." . $_FILES["fimage1"]["name"])){
                echo $_FILES["fimage3"]["name"] . " đã tồn tại";
            } else{
                // Hàm move_uploaded_file sẽ tiến hành upload file lên thư mục upload
                move_uploaded_file($_FILES["fimage3"]["tmp_name"], "../product/image/$aProductId.i." . $_FILES["fimage3"]["name"]);
                $image3 = $aProductId.".i.".$filename;
                // Thông báo thành công
            }
        } else{
            echo "Lỗi : Có vấn đề xảy ra khi upload file"; 
        }
    } else{
        echo "Lỗi: " . $_FILES["fimage3"]["error"];
    };

    $sql = "INSERT INTO product (product_id, list_id, name, price, detail, image1, image2, image3)
    VALUES ('$aProductId', '$aListId', '$aProductName', '$aProductPrice', '$aProductDetail', '$image1', '$image2', '$image3')";

    if ($connect->query($sql) === TRUE) {
       
    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
        exit;
    }
}
$connect->close();
header("Location: add.php");
?>