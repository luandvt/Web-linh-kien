<?php
    if(!isset($_SESSION))
    {
        session_start();
        ob_start();
    }  
?>
<!-- Lay du lieu -->
<!--  <input type="hidden" id="custId" name="custId" value="3487"> -->
<?php 
    $product_id='';
    $name='';
    $mount = 1;
    $price = '';
    $image = '';
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["pname"])) { $name = $_POST["pname"]; }
        if(isset($_POST["pid"])) { $product_id = $_POST["pid"]; }
        if(isset($_POST["pimage1"])) { $image = $_POST["pimage1"]; }
        if(isset($_POST["pprice"])) { $price = $_POST["pprice"]; }
    }
    if(!isset($_SESSION['cart'][$product_id])){
        $_SESSION['cart'][$product_id] = array(
        'id' => $product_id,
        'name' => $name,
        'image' => $image,
        'mount' => $mount,
        'price' => $price
    );}
    else{
    $_SESSION['cart'][$product_id]['mount'] += $mount;
    }
    header('Location: cart.php');
?>

<?php
ob_end_flush();
?>