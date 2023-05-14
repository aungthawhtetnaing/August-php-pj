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
<body style="background-color:lightblue;">
<?php
	if(isset($_POST['add_category']))
	{
		add_category();
	}
	
	if(isset($_POST['update_category']))
	{
		update_category();
	}
	if(isset($_GET['action']) && $_GET['action'] == 'delete')
	{
			del_category();
	}
	?>

<?php
	include "header.php"
?>

<div class="container">
	<div class="row">
    
    	<div class="col-lg-12 col-md-12 col-sm-12" >
        	<div class="page-header p-3 ">
    			<div class="row" style="margin-top:1rem">
                	<h2 style="color:black"> Welcome <span class="text-success" >
       					 <?php if(isset($_SESSION['admin']))
								{echo $_SESSION['admin'];}
								else {$_SESSION ['admin']='';}
							?>
        				</span>
    				</h2>
       			 </div>
        	</div><!--pageheader-->
    	</div><!--col md 12-->
    </div>
    	<div class="row" style="margin-top:1rem">
			<div class="col-md-6 ">
            	<form action="" method="post">
                	<div class="form-group">
                    	<label style="font-size:26px;"><b>Add Category</b></label>
                        <input name="cat_name" type="text" class="form-control"/>
                    </div><!--div formgp-->
                	<button type="submit" name="add_category" class="btn btn-dark" value="Add Category" id="btn">Add Category</button>
                </form>
                <hr />
           <?php
		    if (isset($_GET['action']) && $_GET['action']=='edit')
			{
				$cat_id=$_GET['c_id'];
				$query="select * from menucategory where cat_id='$cat_id'";
				$go_query=mysqli_query($connection,$query);
				while($out=mysqli_fetch_array($go_query))
				{
					$catname=$out['cat_name'];
				
			?>
            <Form method="post">
            	<div class="form-group">
                <label>Update Category</label>
                <input type="text" name="cat_name" class="form-control" value="<?php echo $catname ?>" />
                
                </div><!--div formgp-->
                <button type="submit" name="update_category" class="btn btn-dark">Update</button>
                </Form>
                <?php
				}
			}
				?>
                
                    
				
                
                
            </div><!--col md 6-->
            
            <div class="col-md-6 " >
            	<table class="table table-hover">
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
                </tr>
                
                <?php  
				$query="select * from menucategory";
				$go_query=mysqli_query($connection,$query);
				while($row=mysqli_fetch_array($go_query))
				{
					$cat_id=$row['cat_id'];
					$cat_name=$row['cat_name'];
					echo "<tr>";
					echo "<td>{$cat_id}</td>";
					echo "<td>{$cat_name}</td>";
					echo "<td><a href='category.php?action=delete&c_id={$cat_id}'>X</a>|| 
		<a href='category.php?action=edit&c_id={$cat_id}'>Edit</a>
					</td>";
					echo "</tr>";
				}
				?>
                </table>
            </div><!--col md 6-->
            
            
        </div><!--row2-->
    </div><!--row-->
</div><!--container-->
</body>
</html>