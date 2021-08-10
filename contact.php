<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <?php include("components/head.php"); ?>
</head>
<body>

<style>

.column {
  float: left;
  width:25%;
  margin-bottom: 16px;
  padding: 0 8px;
}

/* Display the columns below each other instead of side by side on small screens */
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}

/* Add some shadows to create a card effect */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
}

/* Some left and right padding inside the container */
.container {
  padding: 0 16px;
}

/* Clear floats */
.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

img{
    height: 250px;
}

.con{
    padding: 0 26px;
}
</style>


<div class="con">
<center><h4>About Project</h4></center>

<p> This Project is made in PHP and Mysql DataBase </p>



<div class="row">
    <div class="col s6 ">
      <div class="card-panel blue">
      <h5 class="center">PHP</h5>
    
        <span class="white-text">
        PHP includes various free and open-source libraries in its source distribution, 
        or uses them in resulting PHP binary builds. PHP is fundamentally an Internet-aware 
        system with built-in modules for accessing File Transfer Protocol (FTP) servers and many database servers, including PostgreSQL, MySQL, Microsoft SQL Server and SQLite (which is an embedded database), LDAP servers, and others. Numerous functions familiar to C programmers, such as those in the stdio family, are available in standard PHP builds.[201]

        </span>
      </div>
    </div>

    <div class="col s6">
      <div class="card-panel green">
      <h5 class="center">Mysql</h5>

        <span class="white-text">
        MySQL is free and open-source software under the terms of the GNU General Public License, and is also available under a variety of proprietary licenses. MySQL was owned and sponsored by the Swedish company MySQL AB, which was bought by Sun Microsystems (now Oracle Corporation).[8] In 2010, when Oracle acquired Sun, Widenius forked the open-source MySQL project to create MariaDB.[9]
        MySQL has stand-alone clients that allow users to interact directly with a MySQL database using SQL, but more often MySQL is used with other
        </span>
      </div>
    </div>


  </div>

<div class="row ">
      
<div class="col s6 ">
<div class="card-panel black white-text center"><h6>Group Members</h6></div>
</div>
</div>


<div class="row">
  <div class="column">
    <div class="card">
      <img src="img/tejas.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h4>Tejas Chaudhari</h4>
        <p class="title">CEO & Developers</p>

        <p><a href="https://www.instagram.com/tejas_s_chaudhari/" class="button">Contact</a></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img/ritesh.jpg" alt="Ritesh" style="width:100%">
      <div class="container">
        <h4>Ritesh Paliwal</h4>
        <p class="title">Developer</p>
        <p>        <p><a href="https://www.instagram.com/_r.i.t.e.s.h_p_//" class="button">Contact</a></p>
</p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img/akshay.jpg" alt="Ritesh" style="width:100%">
      <div class="container">
        <h4>Akshay Patil</h4>
        <p class="title">Developer</p>
      
        <p>        <p><a href="https://www.instagram.com/____akshay_patil___/" class="button">Contact</a></p></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="img/harshal.jpg" alt="John" style="width:100%">
      <div class="container">
        <h4>Harshal Borse</h4>
        <p class="title">Designer</p>
    
<p><a href="https://www.instagram.com/harsh_999_/" class="button">Contact</a></p>      </div>
    </div>
  </div>
</div>


</div>
</body>
</html>