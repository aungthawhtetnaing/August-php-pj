<?php
  session_start();
  include 'connect.php';
  include 'header.php';
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
  

  
       

 <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex ml-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">Blended to Perfection</span>
              <span class="section-heading-lower">Bubble  Teas</span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="photo/bubble.jpg" alt="">
        <div class="product-item-description d-flex mr-auto">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0">Bubble tea or "boba tea" is a sweetened drink made of flavored tea, milk and bubbles. The translucent, squishy bubbles called boba are very easy to make. You only need three ingredients: tapioca flour, water and brown sugar.
Bubble tea (also known as pearl milk tea, bubble milk tea, or boba) (Chinese: 珍珠奶茶; pinyin: zhēnzhū nǎichá, 波霸奶茶; bōbà nǎichá) is a Taiwanese tea-based drink invented in Tainan and Taichung in the 1980s.Recipes contain tea of some kind, flavors of milk, and sugar (optional). Toppings, known as "pearls", such as chewy tapioca balls (also known as pearls or boba), popping boba, fruit jelly, grass jelly, agar jelly, alovera jelly, sago and puddings are often added. Ice-blended versions are frozen and put into a blender, resulting in a slushy consistency.There are many varieties of the drink with a wide range of flavors. The two most popular varieties are black pearl milk tea and green pearl milk tea.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex mr-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">Deep Fried Food</span>
              <span class="section-heading-lower">Fish Ball</span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="photo/homemade.jpg" alt="">
        <div class="product-item-description d-flex ml-auto">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0">  Clean the fish and rinse with cold water, pat dry with paper towels. Filet the fish along the bones from the tail up towards the head using a very sharp knife. Repeat on the other side.Get a bowl to put the fish meat. Using a spoon, scrape the fish meat off the skin of the fish filet, from the tail upwards. Scrape until all meat is off the skin. Discard the skin. Use the spoon to scrape off the fish meat off the fish bone, too.Place all the fish meat on a chopping board, using a Chinese cleaver to chop the fish meat, for about 10 minutes.The fish will become slightly sticky as you chop. Add the salt and pepper and continue chopping for another 10 minutes, the fish meat will become a fish paste.Wet your hands with some water and and take a tablespoon of the fish paste onto your palm and shape them into fish balls.

</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex ml-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">Health benefits and risks of drinking coffee</span>
              <span class="section-heading-lower">Coffee</span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="photo/coffee.jpg" alt="">
        <div class="product-item-description d-flex mr-auto">
          <div class="bg-faded p-5 rounded">
            <p class="mb-0">Travelling the world for the very best quality coffee is something take pride in. When you visit us, you'll always find new blends from around the world, mainly from regions in Central and South America. We sell our blends in smaller to large bulk quantities. Please visit us in person for more details.</p>
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
