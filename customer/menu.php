<?php
	session_start();
	include 'connect.php';
	include 'header(1).php';
	$getquery="select * from menu";
	$perpage=8;
	$go_query=mysqli_query($connection,$getquery);
	$num=mysqli_num_rows($go_query);
	$num=ceil($num/$perpage);
	$page='';
	?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>August (Drinks & Fried Chicken)</title>
    <link rel="shortcut icon" href="photo/logo1.jpg">
<link rel="stylesheet" type="text/css" href="style/bootstrap.css"/>
<script type="text/javascript" src="style/jquery-1.10.2.js"></script>
<script type="text/javascript" src="style/bootstrap.js"></script>
  <link rel="stylesheet" type="text/css" href="style/icon/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="style/style.css"/>

</head>
<style type="text/css">
  #title{
    color: black;
    font-weight:100;
  }
  #title1{
    color: white;
    font-weight: bold;
  }

</style>
<body style="background-color:skyblue;margin-bottom: 50px;" >



  <div class="container">
 
    	
        	<div class="well well-sm" style="background-color: white">
            	<h2>
                <b>Welcome User</b>&nbsp;<span class="fa fa-user"></span>&rArr;
                	<span class="showname" style="color:  green">
                    <b>	<?php
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
                  </span>

              </h2>           
          </div><!--well-->
    
 
   
     
<div class="container" style="margin-left: -1.5rem">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist" style="background-color: white" >
    <li class="nav-item">
      <a class="nav-link active" data-toggle="tab" href="#home" id="title">All Menus</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu1" id="title">Tea</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu2" id="title">Italian Soda</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu3" id="title">Ice Cream</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu4" id="title">Coffee</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu5" id="title">Sandwich</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu6" id="title">Jucies & Milk</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu7" id="title">Deep Fried Foods</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="tab" href="#menu8" id="title">Rice & Noodle</a>
    </li>
  </ul>

  <!-- Tab panes -->
<div class="tab-content" style="margin-left:-1.5rem">
    <div id="home" class="container tab-pane active">
      <br>
<div class="row">
                        
     <?php
						if(isset($_GET['page']))
						{
							$page=$_GET['page'];
							$show_product=($page*$perpage)-$perpage;
						}
						if(!isset($_GET['page']))
						{
							$show_product=0;
						}
						$query="select * from  menu limit $show_product,$perpage";
						$go_query=mysqli_query($connection,$query);
						$count_result=mysqli_num_rows($go_query);
						if($count_result==0)
						{
							echo'<div class="well well-lg">Sorry,no results found!
			<a href="index.php">Back</a></div>';
						}
						elseif($count_result>0)
						{
						while($out=mysqli_fetch_array($go_query))
					{
				$product_id=$out['product_id'];
				$product_name=$out['product_name'];			
				$price=$out['price'];		
				$photo=$out['photo'];
				$display='<div class="col-sm-3"><div class="thumbnail">';
				$display.="<img src='photo/{$photo}' style='width:100px;height:100px'>";
				$display.='<div class="caption">';
				
				$display.="<h3>{$product_name}</h3>";
			
				$display.="<p style='font-size: 1.5rem'>MMK&nbsp;{$price}</p>";
			
				$display.='<p class="text-center"><a href="add-to-cart.php?id='.$product_id.'" class="btn btn-primary">Add-to-cat</a></p>';
				$display.="</div></div></div>";
				echo $display;
				
	}
		}
	

						?>
           
</div>		
   
    <hr />

      <ul class="pager">
          <?php
            for($i=1;$i<=$num;$i++)
            {
             if($i==$page)
              {echo"<li ><a href='index.php?page={$i}' style='color:black;'>{$i}</a></li>";}
           else{
                  echo"<li><a href='menu.php?page={$i}' style='color:black;'>{$i}</a></li>";
            }
           }
          ?>
      </ul> 
  </div>
<!----------------------------------------link------------------------------------------------------>
    <div id="menu1" class="container tab-pane fade" >
      <h1 id="title1">Tea</h1>
      <div class="row">
      <?php
    if(isset($_GET['action'])&& $_GET['action']=='delete'){
    del_menu();}
    $query="select * from menu where cat_id=1 order by product_id ";
    $go_query=mysqli_query($connection,$query);
    while($row=mysqli_fetch_array($go_query))
    {
      $product_id=$row['product_id'];
      $product_name=$row['product_name'];

      $price=$row['price'];
      $photo=$row['photo'];
      echo"<tr>";
      echo '<div class="col-sm-3"><div class="thumbnail">';
      echo"<td><img src='photo/{$photo}' style='width:100px;height:100px'></td>";
      echo '<div class="caption">';
      echo"<td><h3>{$product_name}</h3></td>";
      echo"<td style='font-size: 1.5rem'>MMK&nbsp;{$price}</td>";
      echo '<p class="text-center"><a href="add-to-cart.php?id='.$product_id.'" class="btn btn-primary">Add-to-cat</a></p>';
      echo '</div></div></div>';
      echo"</tr>";
    }
  ?>
</div><hr>
    </div>


    <div id="menu2" class="container tab-pane fade">
      <h1 id="title1">Italian Soda</h1>
      <div class="row">
      <?php
    if(isset($_GET['action'])&& $_GET['action']=='delete'){
    del_menu();}
    $query="select * from menu where cat_id=2 order by product_id ";
    $go_query=mysqli_query($connection,$query);
    while($row=mysqli_fetch_array($go_query))
    {
      $product_id=$row['product_id'];
      $product_name=$row['product_name'];

      $price=$row['price'];
      $photo=$row['photo'];
      echo"<tr>";
      echo '<div class="col-sm-3"><div class="thumbnail">';
      echo"<td><img src='photo/{$photo}' style='width:100px;height:100px'></td>";
      echo '<div class="caption">';
      echo"<td><h3>{$product_name}</h3></td>";
        echo"<td style='font-size: 1.5rem'>MMK&nbsp;{$price}</td>";
      echo '<p class="text-center"><a href="add-to-cart.php?id='.$product_id.'" class="btn btn-primary">Add-to-cat</a></p>';
      echo '</div></div></div>';
      echo"</tr>";
    }
  ?>
</div><hr>
    </div>


     <div id="menu3" class="container tab-pane fade">
      <h1 id="title1">Ice Cream</h1>
      <div class="row">
      <?php
    if(isset($_GET['action'])&& $_GET['action']=='delete'){
    del_menu();}
    $query="select * from menu where cat_id=3 order by product_id ";
    $go_query=mysqli_query($connection,$query);
    while($row=mysqli_fetch_array($go_query))
    {
      $product_id=$row['product_id'];
      $product_name=$row['product_name'];

      $price=$row['price'];
      $photo=$row['photo'];
      echo"<tr>";
      echo '<div class="col-sm-3"><div class="thumbnail">';
      echo"<td><img src='photo/{$photo}' style='width:100px;height:100px'></td>";
      echo '<div class="caption">';
      echo"<td><h3>{$product_name}</h3></td>";
        echo"<td style='font-size: 1.5rem'>MMK&nbsp;{$price}</td>";
      echo '<p class="text-center"><a href="add-to-cart.php?id='.$product_id.'" class="btn btn-primary">Add-to-cat</a></p>';
      echo '</div></div></div>';
      echo"</tr>";
    }
  ?>
</div><hr>
    </div>


     <div id="menu4" class="container tab-pane fade">
      <h1 id="title1">Coffee</h1>
     <div class="row">
      <?php
    if(isset($_GET['action'])&& $_GET['action']=='delete'){
    del_menu();}
    $query="select * from menu where cat_id=4 order by product_id ";
    $go_query=mysqli_query($connection,$query);
    while($row=mysqli_fetch_array($go_query))
    {
      $product_id=$row['product_id'];
      $product_name=$row['product_name'];

      $price=$row['price'];
      $photo=$row['photo'];
      echo"<tr>";
      echo '<div class="col-sm-3"><div class="thumbnail">';
      echo"<td><img src='photo/{$photo}' style='width:100px;height:100px'></td>";
      echo '<div class="caption">';
      echo"<td><h3>{$product_name}</h3></td>";
        echo"<td style='font-size: 1.5rem'>MMK&nbsp;{$price}</td>";
      echo '<p class="text-center"><a href="add-to-cart.php?id='.$product_id.'" class="btn btn-primary">Add-to-cat</a></p>';
      echo '</div></div></div>';
      echo"</tr>";
    }
  ?>
</div><hr>
    </div>


     <div id="menu5" class="container tab-pane fade">
     <h1 id="title1">Sandwich</h1>
      <div class="row">
      <?php
    if(isset($_GET['action'])&& $_GET['action']=='delete'){
    del_menu();}
    $query="select * from menu where cat_id=5 order by product_id ";
    $go_query=mysqli_query($connection,$query);
    while($row=mysqli_fetch_array($go_query))
    {
      $product_id=$row['product_id'];
      $product_name=$row['product_name'];

      $price=$row['price'];
      $photo=$row['photo'];
      echo"<tr>";
      echo '<div class="col-sm-3"><div class="thumbnail">';
      echo"<td><img src='photo/{$photo}' style='width:100px;height:100px'></td>";
      echo '<div class="caption">';
      echo"<td><h3>{$product_name}</h3></td>";
        echo"<td style='font-size: 1.5rem'>MMK&nbsp;{$price}</td>";
      echo '<p class="text-center"><a href="add-to-cart.php?id='.$product_id.'" class="btn btn-primary">Add-to-cat</a></p>';
      echo '</div></div></div>';
      echo"</tr>";
    }
  ?>
</div><hr>
    </div>


     <div id="menu6" class="container tab-pane fade">
   <h1 id="title1">Jucies & Milk</h1>
     <div class="row">
      <?php
    if(isset($_GET['action'])&& $_GET['action']=='delete'){
    del_menu();}
    $query="select * from menu where cat_id=6 order by product_id ";
    $go_query=mysqli_query($connection,$query);
    while($row=mysqli_fetch_array($go_query))
    {
      $product_id=$row['product_id'];
      $product_name=$row['product_name'];

      $price=$row['price'];
      $photo=$row['photo'];
      echo"<tr>";
      echo '<div class="col-sm-3"><div class="thumbnail">';
      echo"<td><img src='photo/{$photo}' style='width:100px;height:100px'></td>";
      echo '<div class="caption">';
      echo"<td><h3>{$product_name}</h3></td>";
       echo"<td style='font-size: 1.5rem'>MMK&nbsp;{$price}</td>";
      echo '<p class="text-center"><a href="add-to-cart.php?id='.$product_id.'" class="btn btn-primary">Add-to-cat</a></p>';
      echo '</div></div></div>';
      echo"</tr>";
    }
  ?>
</div><hr>
    </div>


     <div id="menu7" class="container tab-pane fade">
      <h1 id="title1">Deep Fried Foods</h1>
     <div class="row">
      <?php
    if(isset($_GET['action'])&& $_GET['action']=='delete'){
    del_menu();}
    $query="select * from menu where cat_id=7 order by product_id ";
    $go_query=mysqli_query($connection,$query);
    while($row=mysqli_fetch_array($go_query))
    {
      $product_id=$row['product_id'];
      $product_name=$row['product_name'];

      $price=$row['price'];
      $photo=$row['photo'];
      echo"<tr>";
      echo '<div class="col-sm-3"><div class="thumbnail">';
      echo"<td><img src='photo/{$photo}' style='width:100px;height:100px'></td>";
      echo '<div class="caption">';
      echo"<td><h3>{$product_name}</h3></td>";
        echo"<td style='font-size: 1.5rem'>MMK&nbsp;{$price}</td>";
      echo '<p class="text-center"><a href="add-to-cart.php?id='.$product_id.'" class="btn btn-primary">Add-to-cat</a></p>';
      echo '</div></div></div>';
      echo"</tr>";
    }
  ?>
</div><hr>
    </div>


     <div id="menu8" class="container tab-pane fade">
      <h1 id="title1">Rice & Noodle</h1>
      <div class="row">
      <?php
    if(isset($_GET['action'])&& $_GET['action']=='delete'){
    del_menu();}
    $query="select * from menu where cat_id=9 order by product_id ";
    $go_query=mysqli_query($connection,$query);
    while($row=mysqli_fetch_array($go_query))
    {
      $product_id=$row['product_id'];
      $product_name=$row['product_name'];

      $price=$row['price'];
      $photo=$row['photo'];
      echo"<tr>";
      echo '<div class="col-sm-3"><div class="thumbnail">';
      echo"<td><img src='photo/{$photo}' style='width:100px;height:100px'></td>";
      echo '<div class="caption">';
      echo"<td><h3>{$product_name}</h3></td>";
        echo"<td style='font-size: 1.5rem'>MMK&nbsp;{$price}</td>";
      echo '<p class="text-center"><a href="add-to-cart.php?id='.$product_id.'" class="btn btn-primary">Add-to-cat</a></p>';
      echo '</div></div></div>';
      echo"</tr>";
    }
  ?>
</div><hr>
    </div>
<!-------------------------------->
  </div>

</div>
 
   



    </div><!--container-->

</body>
</html>