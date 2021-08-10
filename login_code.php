<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

<?php
session_start();
include("include/connect.php");

$password =  $_POST['lpassword'];
$phone =  $_POST['lphone'];


if($phone && $password){

    $check_query = mysqli_query($con,"SELECT * from users where phone_number='$phone' and password='$password'");

    $num_rows = mysqli_num_rows($check_query);



   if($check_query){

if($num_rows != 0){
    echo "login hoel";
    $_SESSION['phone'] = $phone;
    header("location:home.php");
     
}else{
    $message =  "<h4>worong password</h4>";
}



   }else{
    $message =  "Invalid Phone Or Password ";
   }

}

?>


<div class="row">
    <div class="col s12">
      <div class="card-panel red">
        <span class="white-text center">
       <?php echo $message;?>
        </span>

      </div>
      <a href="index.php" class="btn-large green ">Login</a>
    </div>
  </div>