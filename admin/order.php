<?php
	session_start();
	include "connect.php";
	include 'function.php';
	$orders=mysqli_query($connection,"select * from orders order by order_id asc");
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
<style>
	#body{
		background-color: lightblue;
		
	}
</style>

</head>
<body id="body"  >
<?php
	if(isset($_POST['add_customer']))
	{
		add_customer();
	}
?>


<?php
	include "header.php"
?>
<br>
<div class="container top">
	<div class="row">
    
    <div class="col-md-12">	
    <div class="page-header">
    	<div class="row"><h2><i class="fa fa-list"></i>&nbsp;<b>Order Lists</b>
        </h2></div><!--row1-->
        </div><!--pageheader-->
    </div><!--col md 12-->
    </div><br>
    	<div class="row" >
        <table class="table table-condensed">
  <tr >
    <th>No</th>
    <th>Customer Name</th>
    <th>Phone</th>
    <th>Delivery Address</th>
    <th style="text-align: center">Item(s)</th>
    <th>Ordered_Date</th>
    <th>Sended_Date</th>
    <th style="text-align: center">Action</th>
  </tr>
  		<?php
		while($out=mysqli_fetch_array($orders)){
	  $check=$out['status'];
		{
			if($check>0){
				$show='<tr class="success">';
			}
				else{
		   $show='<tr>';
				}
           $show.='<td>'.$out['order_id'].'</td>';
		   $show.='<td>'.$out['delivery_name'].'</td>';	
		   $show.='<td>'.$out['delivery_phone'].'</td>';	  
		   $show.='<td>'.$out['delivery_address'].'</td>';

		   $show.='<td>';
		   $orderid=$out['order_id'];
		$order=mysqli_query($connection,"select order_detail.*,menu.* from order_detail left join menu on order_detail.product_id=menu.product_id where order_detail.order_id='$orderid'");
						 while($row=mysqli_fetch_assoc($order)){
							 $show.='<ul style="list-style-type:none;align:center;"><li>'
							 .$row['product_name'].
												 '&nbsp;<span style="color:blue;">
												 ('.$row['product_qty'].')
												 </span></li></ul>';}
							 $show.='</td>';
							$show.='<td>'.$out['order_date'].'</td>';
											
							$chesec=$out['status'];
							if($chesec>0)
											{$show.='<td>'.$out['send_date'].'</td>';}
						else{
							$show.='<td>----/--/--</td>';}
												
						if($out['status']){
						$show.='<td ><a href="status.php?id='.$out['order_id'].'&status=0" class="btn btn-danger">
						Undo</a></td>';}
						else
							{ $show.='<td><a href="status.php?id='.$out['order_id'].'&status=1" class="btn btn-success">
						Mark as Delivered</a></td>';}
						$show.='</tr>';
						echo $show; }
  }

		?>
</table>

        </div ><!--row2-->
    </div><!--row-->
</div><!--container-->
</body>
</html>