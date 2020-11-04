<?php
session_start();
if(isset($_SESSION['phone'])){

  header("location:home.php");

}

?>
<html>
  <head>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
    <link href='css/style.css' rel='stylesheet' type='text/css'>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">    
    <title>Login</title>        
    <style>
        .tabs .indicator{
            background-color: #0d47a1;
        }
        body{
            align-items: center;
            
        }

        .well{
            wordwrap:1px;
        }
      </style>
  </head>    
    <body>      
                     


<br>
<br>
<div class="container center"><h3 class="well">Welcome to NearShop</h3></div>
<br>

            <div class="row container padtop80" style="min-height:100vh">
         
            <div class="col m6 offset-m3 s12">
                <div class="row">
                     <div class="col s12">
      <ul class="tabs">
        <li class="tab col s3"><a href="#test1" class="active blue-text text-darken-4">Login</a></li>
        <li class="tab col s3"><a href="#test2" class="blue-text text-darken-4">Register</a></li>        
      </ul>
    </div>
                </div>
            </div>
   
                <div id="test1" class="col s12 padtop40">                    
                    <div class="col m6 offset-m3 s12 z-depth-1 padtop10 " >
                        <div class="lid">
       
       
       <form action="login_code.php" method="post">

                <div class="input-field col s12 remx">
                  <input name="lphone" placeholder="phone" id="first_name" type="number" class="validate">
                  <label for="first_name">Phone No</label>
                </div>
                <div class="input-field col s12 remx">
                  <input name="lpassword" placeholder="Placeholder" id="password1" type="password" class="validate">
                  <label for="password1">Password</label>
                </div>
            

                <p class="padleft10 remx" >
                    <button type="submit" href="#" class="blue darken-4 btn">Login</buttton>
                             </p>
                        </div>
                       </form>
            </div>
                    
                </div>


<form action="sign_code.php" method="post">

    <div id="test2" class="col s12 padtop40">
                <div class="col m6 offset-m3 s12 z-depth-1 padtop10">

                <div class="input-field col s12 ">
                  <input name="sname" placeholder="Name" id="first_name" type="text" class="validate">
                  <label for="first_name"> Name* </label>
                </div>          
                <div class="input-field col s12 ">
                  <input name="smobile" type="number" placeholder="Phone Number" id="first_name" type="text" class="validate">
                  <label for="first_name">Mobile* </label>
                </div>      
                <div class="input-field col s12 ">
                  <input name="spassword" placeholder="password" id="password1" type="password" class="validate">
                  <label for="password1">Password*</label>
                </div>
                
                 
                <p class="padleft10 center">
                    <button href="#" class="pink darken-1 btn" type="submit">Register</button>                    
                </p>
            <br>

            </div>
                
                </div>    
  
  </form>
  </div>      
        
        
         
      
        
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.8/js/materialize.min.js">
        </script>
        <script>
    	   $( document ).ready(function(){
    	       $(".button-collapse").sideNav();
               $(".dropdown-button").dropdown();
    	       $('select').material_select(); 
               $('.slider').slider({full_width: true});
                   $(".button-collapse").sideNav();
           })
        </script>
        <script>
            $(document).ready(function(){
                $(".hid").hide();
                $("#hider").click(function(){
                    $(".remx").hide();
                    $(".hid").show();
                }); 
                $("#cancll").click(function(){
                    $(".remx").show();
                    $(".hid").hide();
                })
            });
        </script>
    </body>

</body>
</html>