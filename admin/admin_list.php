<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <title>August (Drinks & Fried Chicken)</title>
     <link rel="shortcut icon" href="photo/logo1.jpg">
<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css"/>
<script type="text/javascript" src="style/jquery.min.js"></script>
<script type="text/javascript" src="style/popper.min.js"></script>
<script type="text/javascript" src="style/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style/icon/css/font-awesome.min.css"/>
</head>
<?php
session_start();
	include'connect.php';
 	include'header.php';
 	include'function.php'; 
?>
<body style="background:lightblue">

<?php
if(isset($_POST['add_user']))
{
	add_user();
}
?>

<div class="container">
<div class="row">
     	  <div class="col-lg-12"> 
             	<div class="row">
                <div class="page-header" style="margin-top:2rem">
                	<h2 style="color:black"> Welcome <span class="text-success" >
					<?php 
						if(isset($_SESSION['admin']))
						{
							echo $_SESSION['admin'];
						}
						else{
							$_SESSION['admin']="";
							}
						?></span></h2>
                        </div>
                </div>     
    	  </div>
    	  <div class="container">
          <div class="row" >

          		<table width="100%" height="auto" border="0" style="background:lightblue;color:black; "  >
  <tr >
    <td colspan='7' align="right"><a href="add_admin.php" class="btn btn-success" ><span class="fa fa-plus"></span> Add Admin</a>
    </td>
    
  </tr>
<br>
  <tr  style="color: black"   class="table-secondary table-bordered" >
    <td style="text-align:center;font-weight:bold;padding:1rem">Admin ID</td>
    <td style="text-align:center;font-weight:bold ;padding:1rem">Admin Name</td>
    <td style="text-align:center;font-weight:bold ;padding:1rem">Email</td>
    <td style="text-align:center;font-weight:bold;padding:1rem">Phone</td>
  </tr>

  <?php  
                    	$query="select * from admin order by admin_id asc";
						$go_query=mysqli_query($connection,$query);
						while($row=mysqli_fetch_array($go_query)){
							$admin_id=$row['admin_id'];
							$admin_name=$row['admin_name'];
							$email=$row['email'];
							$phone=$row['phone'];
							echo "<tr class='table table-hover'>";
							echo "<td style='text-align: center;'>{$admin_id}</td>";
							echo "<td style='text-align: center;'>{$admin_name}</td>";
							echo "<td style='text-align: center;'>{$email}</td>";
							echo "<td style='text-align: center;'>{$phone}</td>";						
							echo "</tr>";
							}    
  
  ?>
</table>
</div>
        </div>
        </div>
        
 </div>           
</body>
</html>