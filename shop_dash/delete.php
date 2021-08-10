<?php
session_start();
include("../include/connect.php");


$user_phone = $_SESSION['phone'];

// sql to delete a record
$sql = "DELETE FROM shops WHERE user_phone='$user_phone'";

if (mysqli_query($con, $sql)) {
    header("location:index.php");
} else {
  echo "Error deleting record: " . mysqli_error($con);
}

mysqli_close($con);

?>