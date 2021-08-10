<?php
session_start();

include("include/connect.php");
$phone = $_SESSION['phone'];


$name_sql = "SELECT * from users where phone_number = '$phone' ";
$result = mysqli_query($con,$name_sql);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$comment = $_POST['comment'];
$shop_id = $_POST['shop_id'];

$comment_sql = "INSERT INTO `comments` ( `user_name`, `comment`,`shop_id`) VALUES ('$name', '$comment','$shop_id')";

$comment_query = mysqli_query($con,$comment_sql);

if($comment){
    echo "inser";
    header("location:product.php?shop_id=$shop_id");
}else{
    echo "error";
}


?>