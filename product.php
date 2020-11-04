<html>
<?php include("components/head.php");
include("include/connect.php");

$shop_id = $_GET['shop_id'];


$shop_sql = "select * from shops where shop_id = ".$shop_id;
$comment_sql = "select * from comments where shop_id = ".$shop_id;


$result = mysqli_query($con, $shop_sql);
$result_comment = mysqli_query($con, $comment_sql);


while($row = mysqli_fetch_assoc($result)){


    $shop_id = $row['shop_id'];
    $shop_name = $row['shop_name'];
    $shop_address = $row['shop_address'];
    $shop_city = $row['city'];
    $shop_rate = $row['rate'];
    $shop_image = $row['image_link'];

}



?>

<body>

    <?php include("components/navbar.php")?>



    <!--   Search Card Goes HEre -->




    <style>
    .carousel {

        height: 40%;

    }


    .shop_name {
        text-align: left;
    }

    .city {
        color: #414e5a;
        font-size: 20px;
    }

    .address {
        color: #414e5a;
        font-size: 17px;
        margin-top: 20px;
    }

    .shop_details {
        /* top: 35%; */
        /* position: absolute; */
    }

    .whatsapp {
        width: 25px;

    }

    .contact {
        display: flex;
        justify-content: space-around;
    }

    .contact>div {
        border: black solid 1px;
        padding: 14px;
        border-radius: 28%;
    }

    .contact>div :hover {
        background: gray;

    }


    .widht_100 {
        width: 100%;
    }

    .check {

        color: orange;
    }

    .rating {
        display: flex;
        justify-content: center;
        -
    }

    .rating>i {
        padding-right: 20px;
        font-size: 25px;
    }

    .madhe {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }

    a {
        color: black;
    }
    </style>

    <div class="container">

        <div class="madhe">
            <img class="materialboxed responsive-img" src="shop_dash/uploads/<?php echo $shop_image; ?>">
        </div>

        <div class="shop_details">

            <h3 class="shop_name"><?php echo $shop_name ?></h3>
            <p class="city"><?php echo $shop_city ?></p>

            <div class="contact">
                <div>
                    <a href="tel:+919158110065">
                        <i class="material-icons">phone</i>
                    </a>
                </div>
                <div>
                    <a href="https://wa.me/919158110065">
                        <i class="material-icons">share</i>
                    </a>
                </div>
                <div>
                    <a href="https://bit.ly/322o9Nr">
                        <i class="material-icons">map</i>
                    </a>
                </div>

                <div>
                    <a href="https://wa.me/919158110065">
                        <img class="whatsapp "
                            src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/WhatsApp.svg/766px-WhatsApp.svg.png"
                            alt="whatsapp " />
                    </a>
                </div>
            </div>
            <p class="address"><?php echo $shop_address ?></p>

            <br>
            <button class="btn   green darken-2 widht_100 waves-effect waves-light btn modal-trigger"  data-target="modal1" >Best Deal</button>

            <br>
            <br>
            <br>

            <!-- <p class="city">Rate This</p>
            <div class="rating">

                <?php
/*
for($i=0;$i<$shop_rate;$i++){

    echo '<i class="material-icons check">star</i>';
}
*/
?>

            </div>
1 -->
<br>

<form class="col s12" action="comment.php" method="post">
      <div class="row">
        <div class="input-field col s11">
          <input id="comment" type="text" name="comment" class="validate" required>
          <input  type="text" name="shop_id" class="validate hide" value="<?php echo $shop_id?>">
          <label for="comment">Comment</label>
        </div>
      <div class="row">
        <div class="input-field col s1">
      <button class="btn green" type="submit">Post</button>
        </div>
      </div>
    
     

      </form>

            <div class="row">

<?php 
            while($row = mysqli_fetch_assoc($result_comment)){

                ?>

                <div class="col s6">
                    <div class="card black white-text">

                        <div class="card-content white-text">
                            <span class="card-title"><?php echo $row['user_name']?></span>
                            <p><?php echo $row['comment']?></p>
                        </div>

                    </div>

                </div>

            <?php  } ?>

            </div>
            <br><br><br>

        </div>




    </div>


<!-- Modal -->

<div id="modal1" class="modal modal-fixed-footer">
  
<form action="bestdeal.php" method="post">
    <div class="modal-content">
      <h4>Best Deal</h4>
      <p> You will get best Deal on thiss shop press confirm button <br> You Will Recive Call Shortly :)</p>
    </div>
    <div class="modal-footer">
      <a href="#!" class="modal-close waves-effect waves-green btn red left">Close</a>
  
      <input  type="text" name="shop_id" class="validate hide" value="<?php echo $shop_id?>">
  
      <button type="submit" href="#!" class="modal-close waves-effect waves-green btn blue">Confirm</button>
    </form>
    </div>
  </div>

<!-- Modal -->



    <script>
    
    $('.sidenav').show();

    $(document).ready(function(){
    $('.modal').modal();
  });
    $(document).ready(function() {
        $('.sidenav').sidenav();
    });


    $(document).ready(function() {
        $('.materialboxed').materialbox();
    });

    </script>


    <!-- Aaaj Tevv -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
</body>

</html>