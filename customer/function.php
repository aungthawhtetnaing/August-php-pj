<?php
function create_accu(){
	global $connection;
	global $user_name;
	global $password;
	global $email;
	global $phone;
	global $address;
	$hpass=md5($password);
	$query="select * from customer where customer_name='$user_name' and password='$hpass'";
	$user_query=mysqli_query($connection,$query);
	$count=mysqli_num_rows($user_query);
	if($count>0){
			echo"<script>window.alert('alrady exists')</script>";}
		else{$query="insert into customer(customer_name,password,email,phone,address)";
		$query.="values('$user_name','$hpass','$email','$phone','$address')";
	
		$go_query=mysqli_query($connection,$query);
		if(!$go_query){die("QUERY FAILED".mysqli_error($connection));}
		else{echo"<script>window.alert('you successfully created account')</script>";
	         echo "<script>window.location.href='login.php'</script>";}}
	}	
function add_feedback(){
		global $connection;
		global $username;
		global $email;
		global $subject;
		global $message;
		$query="insert into feedback(name,email,subject,message)";
		$query.="values('$username','$email','$subject','$message')";
		$go_query=mysqli_query($connection,$query);
		if(!$go_query){die("QUERY FAILED".mysqli_error($connection));}
		else{echo"<script>window.alert('The message was successfully sent.')</script>";}}
?>		