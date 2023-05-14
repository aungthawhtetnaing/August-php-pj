<?php
	session_start();
	
	include "connect.php";
	include ('function.php');
	if(isset($_GET['action'])&&$_GET['action']=='edit')
	{
		$p_id=$_GET['p_id'];
		$query="select * from menu where product_id='$p_id'";
		$go_query=mysqli_query($connection,$query);
		while($row=mysqli_fetch_array($go_query))
		{
			$product_id=$row['product_id'];
			$product_name=$row['product_name'];
			$product_cat_id=$row['cat_id'];
			$price=$row['price'];
			$photo=$row['photo'];
		}
	}
	

	?>
<!DOCTYPE html >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>August (Drinks & Fried Chicken)</title>
     <link rel="shortcut icon" href="photo/logo1.jpg">
<link rel="stylesheet" type="text/css" href="style/bootstrap.css"/>
<script type="text/javascript" src="style/jquery-1.10.2.js"></script>
<script type="text/javascript" src="style/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="style/style.css"/>

</head>
<body style="background-color:#474a59">

<?php
	if(isset($_POST['update_menu']))
	{
		update_menu();
	}
?>




<div class="container top">
	<div class="row">
    
    
    	<div class="col-lg-12 col-md-12 col-sm-12" >
        	    <div class="page-header p-3 ">
    	<div class="row" style="margin-top:1rem">
        <h2 style="font-family:Algerian;font-size:3rem;color:#ccc">Hello
        <span class="text-success">
        <?php if(isset($_SESSION['admin']))
		{echo $_SESSION['admin'];}
		else {$_SESSION ['admin']='';}
		?>
        </span></h2>
        </div><!--row1-->
        </div><!--pageheader-->
		
        </div><!--col-->
    </div><!--row-->
    
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
            	<form action="" method="post" enctype="multipart/form-data">
                	<div class="form-group">
                    	<label>Product Name</label>
                        <input type="text" name="product_name" class="form-control" value="<?php echo $product_name?>"/>
                    </div><!--formgp-->	
                	<div class="form-group">
                    	<label>Category Name</label>
                        <select name="cat_id" class="form-control">
                        	<?php 
								$query="select * from menucategory";
								$go_query=mysqli_query($connection,$query);
								while($row=mysqli_fetch_array ($go_query))
								{
									$cat_id=$row['cat_id'];
									$cat_name=$row['cat_name'];
									if($product_cat_id==$cat_id)
									{	
										echo "<option value={$cat_id} selected>{$cat_name}</option>";
									}
									else 
									{echo"<option value={$cat_id}>{$cat_name}</option>";
									}
									}
								_
							?>
                        </select>
                    </div><!--formgp-->
                    
                	<div class="form-group">
                    	<label>Price</label>
                        <input type="text" name="price" class="form-control" value="<?php echo $price;?>"/>
                    </div><!--formgp-->
                    
                    
                    <div class="form-group">
                    	<label>File Input</label>
                        <input type="file" name="photo"  value="<?php echo $photo;?>"/>
                        <img src="photo/<?php echo $photo?>" width="100" height="100" />
                    </div><!--formgp-->
                    
                     <div class="form-group">
                    	<button type="submit" class="btn btn-success" value="Update Menu" name="update_menu">Update</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  <a href="menulist.php"><b class="glyphicon glyphicon-arrow-left" style="font-size: 2rem" >Back</b></a>                
                     </div><!--formgp-->
                    
                </form>
            </div><!--col md 6-->
        </div><!--row2-->
    </div><!--row-->
</div><!--container-->
</body>
</html>