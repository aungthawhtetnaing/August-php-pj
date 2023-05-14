<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link type="text/css" rel="stylesheet" />
</head>

<body>
<?PHP
	include'connect.php';
	$id=$_GET['id'];
	$status=$_GET['status'];
	if($status==1)
	{
		$query="update orders set status=1,send_date=now()where order_id='$id'";
		$go_update=mysqli_query($connection,$query);
		header("location:order.php");
	}
	else{
		$query="update orders set status=0,send_date='null'where order_id='$id'";
		$go_update=mysqli_query($connection,$query);
		header("location:order.php");
	}
	?>

</body>
</html>