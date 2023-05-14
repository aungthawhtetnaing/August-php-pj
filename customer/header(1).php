<!--<?php
if(empty($_SESSION['customer_name'])):
?>-->
<nav class="navbar navbar-inverse" >
  <div class="container-fluid" style="height:60px;">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img src="photo/logo1.jpg" width="45px" height="45px" style="margin-top: -6px">&nbsp;&nbsp;<b style="font-size: 20px">August Drinks & Fried Chicken</b></a>
    </div>
  </div>
</nav>

<!--<?php else:?>-->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="index.php"><img src="photo/logo1.jpg" width="45px" height="45px" style="margin-top: -6px">&nbsp;&nbsp;<b style="font-size: 20px">August Drinks & Fried Chicken</b></a>
    </div>
    <ul class="nav navbar-nav" style="float: right;">
      <li>
          <a href="cart.php"  ><i class="fa fa-shopping-cart"  style="font-size:30px;"></i>
                        &nbsp;<b style="font-size: 2rem">Cart</b>
                        <span class="badge " style="background: white;font-size: 1.6rem" >
                         <?php

                        if (isset($_SESSION['cart'])){
                            $count = count($_SESSION['cart']);
                            echo "<span id=\"cart_count\" class=\"text-success \">$count</span>";
                        }else{
                            echo "<span id=\"cart_count\" class=\"text-success \">0</span>";
                        }
                        ?>
                        </span>
             </a> 
      </li>
      
    </ul>
  </div>
</nav>
<!--<?php endif ;?>-->
