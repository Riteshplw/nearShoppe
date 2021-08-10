<?php
session_start();
include("include/connect.php");
$phone = $_SESSION['phone'];

$shop_id = $_POST['shop_id'];

$best_sql = "INSERT INTO `best_deal` ( `shop_id`, `user_phone`) VALUES ('$shop_id', '$phone')";

$best_query = mysqli_query($con,$best_sql);

if($best_query){
    echo "inser";
    header("location:product.php?shop_id=$shop_id");
}else{
    echo "error";
}


?>