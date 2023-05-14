<?php
  session_start();
  include 'connect.php';
  include 'header.php';1
  ?>
<!DOCTYPE html>
<html class="no-js">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>August (Drinks & Fried Chicken)</title>
     <link rel="shortcut icon" href="photo/logo1.jpg">
<link rel="stylesheet" type="text/css" href="style/icon/css/font-awesome.min.css"/>
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="style/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="style/bootstrap.min.js"></script>
  <!-- Custom fonts for this template -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/business-casual.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
<!---------------loader----------------->
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/loader.css">
<script src="js/vendor/modernizr-2.6.2.min.js"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
<script src="js/main.js"></script>
<style type="text/css">
  #logo{

    border-radius: 20px 20px 20px 20px;

  }
  #org{
      height: 0;
      overflow: hidden;
    }

h1{color: gold;}
.aa{margin:0 auto;}
.ftco-section{color:orange;}

body {
  font-family: 'Lora';
  background-image: linear-gradient(rgba(47, 23, 15, 0.65), rgba(47, 23, 15, 0.65)), url("photo/background1.jpg");
  background-attachment: fixed;
  background-position: center;
  background-size: cover;
}
.dropbtn {
  background-color: rgba(47,23,15,.9);
  color: white;
  
  font-size: 16px;
  border: none;

}
.dropdown {
  position: relative;
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: rgba(47,23,15,.9);
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
  font-weight: bold;
}

.dropdown-content a {
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color:#00adb5}

.dropdown:hover .dropdown-content {
  display: block;
}

.dropdown:hover .dropbtn {
  background-color: rgba(47,23,15,.9);;
}
#title{
   text-decoration: none; 
   position: relative;
   color: white; 
  
}
#title::after{
  content: '';
  width: 0%;
  height:3px;
background: #36D1DC;  /* fallback for old browsers */
background: -webkit-linear-gradient(to top, #5B86E5, #36D1DC);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to top, #5B86E5, #36D1DC); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  position: absolute;
  bottom: 0%;
  left: 50%;
  border-radius: 15px;
  transition: all 500ms ease;
} 
#title:hover::after{
   left: 0%;
   width: 100%;
}
</style>
</head>

<body  class="demo">

   <div id="loader-wrapper">
      <div id="loader"></div>

      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>

    </div>
  </div>
<!------------------------------------------------------------------------------------------->

  <h1 class="site-heading text-center text-white d-none d-lg-block">
    <img src="photo/logo.jpg" alt="" width="150px" height="150px" id="logo">
    <span class="site-heading-upper text-primary mb-3"> Drink And Fried Chicken</span>
    <span class="site-heading-lower">August</span>
  </h1>

  <!-- Navigation -->
  

  
       

 <section class="page-section about-heading">
    <div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="photo/about.jpg" alt="">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">Bubble Tea Shop & Coffee Shop</span>
                <span class="section-heading-lower">About Our Cafe</span>
              </h2>
              <p>August shop was first published in 2016 and it become popular after 3 years.August shop is base on k-pop.It is popular among teens mostly girls because it is based on k-pop.Nowadays k-pop is popular so that it is good for those who prefers to k-pop.Not only for k-poper but also for others it make a good position for comfortment and provide enjoyment.its decoration is effortless and also make a good place to have a look and for people who like to take picture alots.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php 
  include 'footer.php';
?> 



</body>

</html>
