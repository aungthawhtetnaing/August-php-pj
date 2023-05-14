
<?php
if(empty($_SESSION['customer_name'])):
?>

<nav class="navbar navbar-expand-lg navbar-dark py-lg-3" id="mainNav">
    <div class="container">
    
  
  <a class="navbar-brand d-lg-none" href="index.php">
    <img src="photo/logo.jpg" alt="" width="55px" height="55px" style="border-radius: 10px;border:1px solid grey">
  </a>
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#" title="August (Drinks & Fried Chicken)"> <b style="margin-left: 34%; ">August</b><br>(Drinks & Fried Chicken)</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto"> 
         
          <li class="nav-item px-lg-4" >
            <a class="nav-link text-uppercase text-expanded" href="index.php" id="title" >Home</a>
          </li>

          <li class="nav-item px-lg-4" >
            <a class="nav-link text-uppercase text-expanded"  href="menu.php"  id="title" >Menus</a>
          </li>

          <li class="nav-item px-lg-4">
            <div class="dropdown" >
              
                <a class="nav-link text-uppercase text-expanded"  href="about.php" id="title">About&nbsp;<i class="fa fa-caret-down"></i></a>
                  <div class="dropdown-content">
                      <a href="product.php">Products</a>
                      <a href="store.php">Store</a>
                 </div>
               </div>
          </li>

          <li class="nav-item px-lg-4"  >
            <a class="nav-link text-uppercase text-expanded"  href="feedback.php" id="title">Feedback</a>
          </li>

          <li class="nav-item px-lg-5" >
              <a class="nav-link text-uppercase text-expanded"  href="login.php" >
                <span class="fa fa-user-o" style="font-size: 17px;">
                  
                </span> 
                   Login
              </a>
          </li>
      
        </ul>
      </div>
    </div>
  </nav>


<?php else:?>


<nav class="navbar navbar-expand-lg navbar-dark py-lg-3" id="mainNav">
    <div class="container">
    <a class="navbar-brand d-lg-none" href="index.php">
    <img src="photo/logo.jpg" alt="" width="55px" height="55px" style="border-radius: 10px;border:1px solid grey">
  </a>
      <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#" title="August (Drinks & Fried Chicken)"> <b style="margin-left: 34%; ">August</b><br>(Drinks & Fried Chicken)</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav mx-auto"> 
         
          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded" href="index.php" id="title">Home</a>
          </li>

          <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded"  href="menu.php" id="title">Menus</a>
          </li>

          <li class="nav-item px-lg-4">
            <div class="dropdown">
              
                <a class="nav-link text-uppercase text-expanded"  href="about.php" id="title">About&nbsp;<i class="fa fa-caret-down"></i></a>
                  <div class="dropdown-content">
                      <a href="product.php">Products</a>
                      <a href="store.php">Store</a>
                 </div>
              </div>
         </li>

        <li class="nav-item px-lg-4">
            <a class="nav-link text-uppercase text-expanded"  href="feedback.php" id="title">Feedback</a>
         </li>

         <li class="nav-item px-lg-4" style="text-decoration: none; color: white;margin-top: 5px">
              <span class="fa fa-user-circle-o" style="font-size: 22px;"></span>
                      <b style="font-size: 20px;font-weight: bold;">
                      	<?php
                           if(!empty($_SESSION['customer_name']))
                           {
                              echo $_SESSION['customer_name'];
                           }
                           else
                           {
                            $_SESSION['customer_name']="";
                           }
                        ?> 
                      </b>
                  
         </li>
           <li class="nav-item px-lg-5">
            <a class="nav-link text-uppercase text-expanded" id="title1" href="logout.php">
              <i class="fa fa-sign-out" style="font-size:17px"></i>&nbsp;Logout</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>



<?php endif;?>
