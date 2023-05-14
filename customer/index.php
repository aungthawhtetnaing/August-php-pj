<?php
  session_start();
  include 'connect.php';
  include 'header.php';
  ?>

<!DOCTYPE html>
<html class="no-js">
<head>
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
  padding: 11px 15px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {
  background-color:#00adb5;
    
}

.dropdown:hover .dropdown-content {
  display: block;
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
  

  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="photo/intro.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">Fresh Food</span>
            <span class="section-heading-lower">Worth Drinking</span>
          </h2>
         <p id="org">Every cup of our quality artisan food starts with locally sourced, hand picked ingredients. Once you try it, our food will be a blissful addition to your everyday morning routine - we guarantee it!
          </p>
        <p id="show"></p>
  <script>
    var org=document.getElementById('org').innerHTML;
    var int=0;
    function typewriter(){
      var show=document.getElementById('show');
      show.innerHTML+=org[int];
      int++;
      if(int==org.length){
        clearInterval(stop);
      }
    }
    var stop=setInterval(typewriter,90);
  </script>
          <div class="intro-button mx-auto">
            <a class="btn btn-primary btn-xl" href="#">Visit Us Today!</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">Our Promise</span>
              <span class="section-heading-lower">To You</span>
            </h2>
            <p class="mb-0">When you walk into our shop to start your day, we are dedicated to providing you with friendly service, a welcoming atmosphere, and above all else, excellent products made with the highest quality ingredients. If you are not satisfied, please let us know and we will do whatever we can to make things right!</p>
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
