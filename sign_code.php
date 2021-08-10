<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">

<?php
session_start();
include("include/connect.php");

$name =  $_POST['sname'];
$password =  $_POST['spassword'];
$phone =  $_POST['smobile'];


if($name && $password){

    $check_query = mysqli_query($con,"SELECT * from users where phone_number='$phone' ");

    $num_rows = mysqli_num_rows($check_query);

if($num_rows === 0){

    $query = mysqli_query($con,"INSERT INTO users (name,phone_number,password) values('$name','$phone','$password')");

    if($query){
     
    
        $_SESSION['phone'] = $phone;
        header("location:home.php");
    
    }else{
        $message =  "Error Try Again :)";
    }
    

}else{
    $message =  "Number Already Register";
}




}



?>



<div class="row">
    <div class="col s12">
      <div class="card-panel red">
        <span class="white-text center">
   <h3>    <?php echo $message;?> </h3>
        </span>

      </div>
      <a href="index.php" class="btn-large green ">Login</a>
    </div>
  </div>