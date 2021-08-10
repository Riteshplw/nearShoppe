<?php
session_start();
include("../include/connect.php");
$shop_name = $_POST['shop_name'];
$city = $_POST['city'];
$address = $_POST['address'];
$cat = $_POST['cat'];
$phone = $_POST['phone'];
$rate = rand(2,5);
$user_phone = $_SESSION['phone'];
 if($shop_name && $phone){


$sql = "INSERT INTO `shops` ( `shop_name`, `shop_address`, `city`, `phone_no`, `rate`,`category`,`user_phone`)
    VALUES ('$shop_name', '$address', '$city','$phone','$rate','$cat','$user_phone')";
    
    if (mysqli_query($con, $sql)) {

        header("location:index.php");

    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    
    mysqli_close($con);
    
 }


?>