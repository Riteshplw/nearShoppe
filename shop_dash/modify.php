<?php
session_start();
include("../include/connect.php");
$shop_name = $_POST['shop_name'];
$city = $_POST['city'];
$address = $_POST['address'];
$phone = $_POST['phone'];

$user_phone = $_SESSION['phone'];
 if($shop_name && $phone){

$sql = "UPDATE  shops  SET shop_name = '$shop_name', shop_address ='$address', city ='$city' , phone_no ='$phone'  WHERE user_phone = '$user_phone'";
    
    if (mysqli_query($con, $sql)) {

        header("location:index.php");

    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }
    
    mysqli_close($con);
    
 }


?>