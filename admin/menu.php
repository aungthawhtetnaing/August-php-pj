<?php
	session_start();
	include "connect.php";
	include "function.php";
    include "header.php";
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>August (Drinks & Fried Chicken)</title>
     <link rel="shortcut icon" href="photo/logo1.jpg">
<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css"/>
<script type="text/javascript" src="style/jquery.min.js"></script>
<script type="text/javascript" src="style/popper.min.js"></script>
<script type="text/javascript" src="style/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style/icon/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="style.css"/>
<style>
	#lable{
	font-family:Brush Script Std;
	font-size:28px;
	color:black;
	}
</style>
</head>
<body style="background-color:lightblue">
<?php
	if(isset($_POST['add_menu']))
	{
		add_menu();
	}
?>




<div class="container top" >
	<div class="row">
    
    	<div class="col-lg-12 col-md-12 col-sm-12" >
        	    <div class="page-header p-3 ">
    	<div class="row" style="margin-top:1rem">
                	<h2 style="color:black"> Welcome <span class="text-success" >
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
    
        <div class="col-lg-4 col-md-4 col-sm-4">
    	<img src="photo/06.jpg" style="width:20rem;height:20rem"/>
    </div><!--col-->

    <div class="col-lg-7 col-md-7 col-sm-7">
            	<form action="" method="post" enctype="multipart/form-data">
                	<div class="form-group">
                    	<label id="lable">Product Name</label>
                        <input type="text" name="product name" class="form-control" />
                    </div><!--formgp-->	
                	<div class="form-group">
                    	<label id="lable">Category Name</label>
                        <select name="cat_id" class="form-control">
                        	<?php 
								$query="select * from menucategory";
								$go_query=mysqli_query($connection,$query);
								while($row=mysqli_fetch_array ($go_query))
								{
									$cat_id=$row['cat_id'];
									$cat_name=$row['cat_name'];
									{	
										echo "<option value={$cat_id}>{$cat_name}</option>";
									}
								}
							?>
                        </select>
                    </div><!--formgp-->
                    
                	<div class="form-group">
                    	<label id="lable">Price</label>
                        <input type="text" name="price" class="form-control"/>
                    </div><!--formgp-->
                    
                    
                    <div class="form-group">
                    	<label id="lable">File Input</label>
                        <input type="file" name="photo"  />
                    </div><!--formgp-->
                    
                     <div class="form-group">
                    	<button type="submit" class="btn btn-success" name="add_menu">Submit</button>                  
                     </div><!--formgp-->
                    
                </form>
                </div><!--col-->
    </div><!--row-->
</div><!--container-->
</body>
</html>