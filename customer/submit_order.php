<?php
	session_start();
	include'connect.php';
	if(!empty($_SESSION['customer_name']))
	{
		$customer_name=$_SESSION['customer_name'];
		$query="select * from customer where customer_name='$customer_name'";
		$go_query=mysqli_query($connection,$query);
		while($out=mysqli_fetch_array($go_query))
		{
			$customer_id=$out['customer_id'];
			$customer_name=$out['customer_name'];
			$email=$out['email'];
			$phone=$out['phone'];
			$address=$out['address'];
		}
	}
   
	?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>August (Drinks & Fried Chicken)</title>
     <link rel="shortcut icon" href="photo/logo1.jpg">
<link rel="stylesheet" type="text/css" href="style/bootstrap.css"/>
<script type="text/javascript" src="style/jquery-1.10.2.js"></script>
<script type="text/javascript" src="style/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="style/icon/css/font-awesome.min.css"/>
<style type="text/css">
    .text{
        font-size:19px
    }
</style>
</head>
<body style="background-color: skyblue">

    <div class="container" style="margin-top:3rem">
    <div class="row">
    	<div class="col-md-12">
        
            <h2>Please Fill Out The Form</h2>
            <hr>
            	<div class="row">
                    <div class="col-md-6 col-md-offset-3">
                    	<form action="submit.php" method="post">
                        	<div class="form-group">
                            	<label class="text"><span class="fa fa-user"></span>&nbsp; Customer Name</label>
                                <input name="customer_name" type="text" value="<?php if(isset($customer_name)){echo$customer_name;}?>" class="form-control"/>
                        	</div><!--formgp-->
                            <div class="form-group">
                            	<label class="text"><span class="fa fa-envelope"></span>&nbsp;Email</label>
                                <input name="email" type="email" value="<?php if(isset($email)){echo$email;}?>" class="form-control"/>
                        	</div><!--formgp-->
                        	<div class="form-group">
                            	<label class="text"><span class="fa fa-phone"></span>&nbsp;Phone</label>
                                <input name="phone" type="text" value="<?php if(isset($phone)){echo$phone;}?>" class="form-control"/>
                        	</div><!--formgp-->
                        	<div class="form-group">
                            	<label class="text"><span class="fa fa-address-book"></span>&nbsp;Address</label>
                                <textarea name="address" type="text"  class="form-control"><?php if(isset($address)){echo$address;}?></textarea>
                        	</div><!--formgp-->
                        	<div class="form-group">
                            	<label class="text">Payment Type:</label>
                                <select name="payment_type" class="form-control">
                                	<option value="Master Card">Master Card</option>
                                	<option value="Visa Card">Visa Card</option>
                                    <option value="Credit Card">Credit Card</option>

                                </select>
                        	</div><!--formgp-->
                        	<div class="form-group">
                            	<label class="text"><span class="fa fa-credit-card"></span>&nbsp;Card No:</label>
                                <input name="cardno" value="" type="text" class="form-control"/>
                        	</div><!--formgp-->
                        	<div class="form-group">
                                <input name="customer_id"  value="<?php if(isset($customer_id)){echo$customer_id;}?>" type="hidden" />
                                <input type="submit" name="submit" value="submit" class="btn btn-primary" />

                        	</div><!--formgp-->
                        </form>
                    </div><!--colmd6-->
                </div><!--row-->
        </div><!--colsm12-->

    </div><!--row-->
    </div><!--container-->
</body>
</html>