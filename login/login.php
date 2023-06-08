<?php 

session_start();

include '../connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($db, "SELECT * FROM login WHERE username='$username' AND password='$password'");
$cek = mysqli_num_rows($query);

if($cek > 0){
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    header("location:../p_data-penjualan.php");
} else {
    header("location:../v_login.php");
}

?>