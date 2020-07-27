<!-- Process reg -->
<?php if(!isset($_SESSION)) 
{ 
    session_start(); 
} ?>
<?php
    $username = '';
    $useremail = '';
    $userphonenum = '';
    $userpass = 'pass';
    $reuserpass = 'repass';
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST["name"])) { $username = $_POST["name"]; }
    if(isset($_POST["email"])) { $useremail = $_POST["email"]; }
    if(isset($_POST["phonenum"])) { $userphonenum = $_POST["phonenum"]; }
    if(isset($_POST["pass"])) { $userpass= $_POST["pass"]; }
    if(isset($_POST["repass"])) { $reuserpass= $_POST["repass"]; }
    include_once("../database/connect.php");
    $sql = "INSERT INTO users (user_id, name, email, phonenum, password, typeUsers) 
    VALUES ('null', '$username','$useremail', '$userphonenum','$userpass','1001')";
    if ($connect->query($sql) === TRUE) {

    } else {
        echo "Error: " . $sql . "<br>" . $connect->error;
        exit;
    }
    header("Location: login.php");
}
?>