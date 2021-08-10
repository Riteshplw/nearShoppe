<?php

include("include/connect.php");
include("components/head.php");
include("components/navbar.php");
$query = $_GET['query'];


$search_sql = "select * from shops where shop_name LIKE '%".$query."%' ";


$result = mysqli_query($con, $search_sql);

$search_count = mysqli_num_rows($result);

?>

<style>

a{
    color:white !important;
}

.card{
    background-color:#fb8c00;
}

.card-action{
    background: black !important;
    display: flex;
    justify-content: space-between;
}

.no{
    padding: 10px;
    text-align: center;
    font-size: 20px;
}
/*
.card:nth-child(even) {background: blue}
.card:nth-child(odd) {background: red}
*/
    </style>

<br>
<div class="row">

<?php

if($search_count === 0){
echo "<div class='container'><div class='card red'><p class='no white-text '>No Search Found for : ".$query."</p></div></div>";
}else{



while($row = mysqli_fetch_assoc($result)){

    $shop_id = $row['shop_id'];
    $shop_name = $row['shop_name'];
    $shop_address = $row['shop_address'];
    $shop_city = $row['city'];
    

?>

    <div class="col s12 m6">

    <div class="card z-depth-2 ">
    <a href="product.php?shop_id=<?php echo $shop_id?>">

        <div class="card-content white-text">
          <span class="card-title"><?php echo $shop_name ?></span>
     
<p><i class="material-icons">home</i>   <?php echo $shop_address ?> <i class="material-icons right">map</i> </p>
<p><i class="material-icons">business</i>  <?php echo $shop_city ?></p>

</a>

        </div>
        <div class="card-action">
          <a href="#"><i class="material-icons white-text">phone</i></a>
          <a href="#"><i class="material-icons white-text">message</i></a>
         
        </div>
      </div>
  
    </div>


<?php

}


}
?>
  </div>
