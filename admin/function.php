<?php

//index.php//
	function adminlogin(){	
		global $connection;

			$name=$_POST['adminname'];
			$password=$_POST['password'];
			$hpass=md5($password);
			
			$query="select * from admin";
			$go_query=mysqli_query($connection,$query);
			while($out=mysqli_fetch_array($go_query)){
			$db_admin_name=$out['admin_name'];
			$db_password=$out['password'];
			if($db_admin_name==$name && $db_password==$hpass)
			{
			$_SESSION['admin']=$name;
			header("location:dashboard.php");
			}
			else{
				echo "<script>alert('Invalid admin name and user')</script>";
				echo "<script>window.location.href='index.php'</script>";
				}
		}

}
		
//register.php//		
function create_accu(){
	global $connection;
	global $user_name;
	global $password;
	global $email;
	global $phone;
	$hpass=md5($password);
	$query="select * from admin where admin_name='$user_name' and password='$hpass'";
	$user_query=mysqli_query($connection,$query);
	$count=mysqli_num_rows($user_query);
	if($count>0){
			echo"<script>window.alert('already exists')</script>";}
		else{$query="insert into admin(admin_name,password,email,phone)";
$query.="values('$user_name','$hpass','$email','$phone')";
	
		$go_query=mysqli_query($connection,$query);
		if(!$go_query){die("QUERY FAILED".mysqli_error($connection));}
		else{echo"<script>window.alert('you successfully created account')</script>";
			 echo "<script>window.location.href='index.php'</script>";	}}
	}

//add_admim.php//
function create_accu1(){
	global $connection;
	global $user_name;
	global $password;
	global $email;
	global $phone;
	$hpass=md5($password);
	$query="select * from admin where admin_name='$user_name' and password='$hpass'";
	$user_query=mysqli_query($connection,$query);
	$count=mysqli_num_rows($user_query);
	if($count>0){
			echo"<script>window.alert('already exists')</script>";}
		else{$query="insert into admin(admin_name,password,email,phone)";
$query.="values('$user_name','$hpass','$email','$phone')";
	
		$go_query=mysqli_query($connection,$query);
		if(!$go_query){die("QUERY FAILED".mysqli_error($connection));}
		else{echo"<script>window.alert('you successfully created account')</script>";
			 echo "<script>window.location.href='admin_list.php'</script>";	}}
	}
	
function add_user()
	 {
		global $connection;
		$user_name=$_POST['username'];
		$password=$_POST['password'];
		$cpass=$_POST['comfirmpassword'];
		if($password!=$cpass)
		{echo"<script>window.alert('Password and Comfirmpassword are must be same')</script>";}
		else if ($password!="" && $user_name!="")
		 {
			$query="select * from user where user_name='$user_name' and password=md5('$password')";
			$ch_query=mysqli_query($connection,$query);
			$count=mysqli_num_rows($ch_query);
				if($count>0)
				 {
					echo"<script>window.alert('This Product is already exists')</script>";	 
				 }
				else
				 {
					$hashvalue=md5($password);
					$user_role=$_POST['usertype'];
					$query="insert into user(user_name,password,role) values ('$user_name','$hashvalue','$user_role')";
					$go_query=mysqli_query($connection,$query);
					if(!$go_query)
					 {
						die("QUEYR FAILED".mysqli_error($connection));
					 }
							header("location:user_list.php");	 
						 
					 }
				 
		 }}	
		 
function add_category()
		{
			global $connection;
			global $msg;
			$cat_name=$_POST ['cat_name'];
			
			if($cat_name=="")
			{
				echo "<script>window.alert('Enter Name')</script>";
			}
			elseif ($cat_name!=="")
			{
				$query="select * from menucategory where cat_name='$cat_name'";
				$ch_query=mysqli_query($connection,$query);
				$count=mysqli_num_rows($ch_query);
					if($count>0)
					{
						echo"<script>window.alert('Already Exist')</script>";
					}
			else
			{
				$query="insert into menucategory (cat_name)values ('$cat_name')";
				$go_query=mysqli_query($connection,$query);
					if(!$go_query)
					{
						die("QUERY FAILED".mysqli_error($connection));
					}
						else 
						{ echo "<script>window.alert('successfully inserted')</script>";
						}
			}
			}
		}
		
function update_category(){
		
			global $connection;
			$cat_name=$_POST['cat_name'];
			$cat_id=$_GET['c_id'];
			$query="update menucategory set cat_name='$cat_name' where cat_id='$cat_id'";
			$go_query=mysqli_query($connection,$query);
			if(!$go_query){
				die("QUERY_FAILED".mysqli_error($connection));
			}
			header("location:category.php");
		}
		
function del_category(){
			global $connection;
			$cat_id=$_GET['c_id'];
			$query="delete from menucategory where cat_id='$cat_id'";
			$go_query=mysqli_query($connection,$query);
			header("location:category.php");
		}


function update_menu()
		{global $connection;
		$product_id=$_GET['p_id'];
		$product_name=$_POST['product_name'];
		$cat_id=$_POST['cat_id'];
		$price=$_POST['price'];
		$photo=$_FILES['photo']['name'];
		if(!$photo)
		{
			$query="update menu set product_name='$product_name',cat_id='$cat_id',price='$price' where product_id='$product_id'";
			}
		else		
		{
			$query="update menu set product_name='$product_name',cat_id='$cat_id',price='$price',photo='$photo'where product_id='$product_id'";
			}
		$go_query=mysqli_query($connection,$query);
		if(!$go_query)
		{
			die("QUERY FAILED".mysqli_error($connection));
		}
		else
		{
			move_uploaded_file($_FILES['photo']['tmp_name'],'../photo/'.$photo);
		}
		header("location:menulist.php");
		}

function add_menu()
		{
			global $connection;
			$product_name=$_POST['product_name'];
			$cat_id=$_POST['cat_id'];
			$price=$_POST['price'];
			$photo=$_FILES['photo']['name'];
				if($photo=="")
			{
				echo "<script>window.alert('Choose product images')</script>";
			}
			elseif($product_name!="" && $photo!="")
			{
				$query="select * from menu where product_name='$product_name' " ;
				
				$ch_query=mysqli_query($connection,$query);
				$count=mysqli_num_rows($ch_query);
				if($count>0)
				{
					echo "<script>window.alert('This Product is alredy exist')</script>";
				}
				else
				{
					$query="insert into menu(product_name,cat_id,price,photo)values( '$product_name','$cat_id','$price','$photo')";
					$go_query=mysqli_query($connection,$query);
					if(!$go_query)
					{
						die("QUERY FAILED".mysqli_error($connection));
					}
					else{
						move_uploaded_file($_FILES['photo']['tmp_name'],'../photo/'.$photo);
					header ("location:menulist.php");
					}
				}
			}
		}

		
function del_menu()
		{
			global $connection;
			$p_id=$_GET['p_id'];
			$query="delete from menu where product_id='$p_id'";
			$go_query=mysqli_query($connection,$query);
			header("location:menulist.php");
			
		}

function add_delivery(){
	global $connection;
	global $user_name;
	global $phone;
	global $address;
	$query="select * from delivery where delivery_name='$user_name'";
	$user_query=mysqli_query($connection,$query);
	$count=mysqli_num_rows($user_query);
	if($count>0){
			echo"<script>window.alert('already exists')</script>";}
		else{$query="insert into delivery(delivery_name,phone,address)";
      $query.="values('$user_name','$phone','$address')";
	
		$go_query=mysqli_query($connection,$query);
		if(!$go_query){die("QUERY FAILED".mysqli_error($connection));}
		else{echo"<script>window.alert('you successfully delivery list')</script>";
		  echo "<script>window.location.href='deliverystaff_list.php'</script>";}}
	

	}
	function del_delivery(){
			global $connection;
			$delivery_id=$_GET['delivery_id'];
			$query="delete from delivery where delivery_id='$delivery_id'";
			$go_query=mysqli_query($connection,$query);
			header("location:deliverystaff_list.php");
		}
  


?>