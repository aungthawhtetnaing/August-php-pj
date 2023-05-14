<?php
	session_start();
	include "connect.php";
	include ('function.php');
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
</head>
<body style="background-color:lightblue">

<?php
	if(isset($_POST['add_menu']))
	{
		add_menu();
	}

		if(isset($_POST['del_menu']))
	{
		del_menu();
	}

?>


<?php
	
	include "header.php"
?>

<div class="container top">
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
			<div class="col-md-12">
            	<table class="table table-striped">
                <tr>
                	<td colspan="4" align="left">
                    <a href="tea.php" class="btn btn-dark">Tea</a>
                    <a href="soda.php" class="btn btn-dark">Italian Soda</a>
                    <a href="icecream.php" class="btn btn-dark">Icecream</a>
                     <a href="coffee.php" class="btn btn-dark">Coffee</a>
                    <a href="sandwich.php" class="btn btn-dark">Sandwish</a>
                    <a href="jucies.php" class="btn btn-dark">Jucies</a>
                    <a href="deep.php" class="btn btn-dark">Deep Fried Foods</a>
                    <a href="rice.php" class="btn btn-dark">Rice/Noodle</a>
			<h1 style="font-family:Algerian">Italian Soda</h1>
                    </td>
                    <td align="right"><a href="menu.php" class="btn btn-dark"> <span class="fa fa-plus"></span>&nbsp;Add Product</a></td>
                </tr>
  <tr>
    <td>Photo</td>
    <td>ID</td>
    <td>Name</td>
    <td>Price</td>
    <td>Action</td>
  </tr>
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
			echo"<td><img src='photo/{$photo}'width='100'height='100'></td>";
			echo"<td>{$product_id}</td>";
			echo"<td>{$product_name}</td>";
			echo"<td>{$price}</td>";
			echo"<td><a href='menulist.php?action=delete&p_id={$product_id}'class='fa fa-trash'onclick=\"return confirm('Are You Sure?')\"></a>||
			<a href='edit.php?action=edit&p_id={$product_id}'class='fa fa-edit' ></a></td>";
			echo"</tr>";
		}
  ?>
</table>

            
            
            
            
            </div><!--col md 12-->
        </div><!--row2-->
    </div><!--row-->
</div><!--container-->
</body>
</html>