<?php
session_start();	
	include "connect.php";
    include "header.php";
	?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

     <title>August (Drinks & Fried Chicken)</title>
     <link rel="shortcut icon" href="photo/logo1.jpg">
<link rel="stylesheet" type="text/css" href="style/bootstrap.min.css"/>
<script type="text/javascript" src="style/jquery.min.js"></script>
<script type="text/javascript" src="style/popper.min.js"></script>
<script type="text/javascript" src="style/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="style/icon/css/font-awesome.min.css"/>

</head>
<style>
	#body{
		background-position:center;
		background-size:100%;
		background-image:url(photo/bg12.jpg);
		background-repeat:no-repeat;
	}
	:root {
    --time-slot-length: 0.1s;
    --t1x: var(--time-slot-length);
    --t2x: calc(var(--time-slot-length) * 2);
    --t3x: calc(var(--time-slot-length) * 3);
    --t4x: calc(var(--time-slot-length) * 4);
    --color: #00ffbf;
}

#box  {
    padding: px;
}

#box a {
    color: white; 
    box-sizing: border-box;
    border: 0.5px solid rgba(255, 255, 255, 0.2);
    border-radius: 0.1em;
    position: relative;
    transition: var(--t4x); /* duration 4x */
    margin: 0rem;

}

#box a:hover {
    color: var(--color);
    animation: pulse ease-out 1s var(--t4x); /* delay 4x */
  
	background:no-repeat;
    color: white;
}

#box a::before,
#box a::after {
    content: '';
    position: absolute;;
    width: 0;
    height: 0;
    border-radius: inherit;
    visibility: hidden;
}

#box a::before {
    top: -1px;
    left: -1px;
    border: 1px solid;
    border-color: var(--color) var(--color) transparent transparent;
    transition:
        height linear var(--t1x) var(--t2x), /* delay 2x */
        width linear var(--t1x) var(--t3x), /* delay 3x */
        visibility 0s var(--t4x); /* delay 4x */
}

#box a::after {
    bottom: 1px;
    right: 1px;
    border: 1px solid;
    border-color: transparent transparent var(--color) var(--color);
    transition:
        height linear var(--t1x),
        width linear var(--t1x) var(--t1x), /* delay 1x */
        visibility 0s var(--t2x);  /* delay 2x */
}

#box a:hover::before,
#box a:hover::after {
    width: 100%;
    height: 100%;
    visibility: visible;
}

#box a:hover::before {
    transition:
        visibility 0s,
        width linear var(--t1x),
        height linear var(--t1x) var(--t1x); /* delay 1x */
}

#box a:hover::after {
    transition: 
        visibility 0s var(--t2x), /* delay 2x */
        width linear var(--t1x) var(--t2x), /* delay 2x */
        height linear var(--t1x) var(--t3x); /* delay 3x */
}

@keyframes pulse {
    from {
        /* hsl(210, 100%, 56%) == dodgerblue */
        box-shadow: 0 0 hsla(210, 100%, 56%, 0.5);
    }

    to {
        box-shadow: 0 0 0 1em hsla(210, 100%, 56%, 0);
    }
}
</style>
<body id="body">

<div class="container">
	<div class="row">
    	<div class="col-lg-12 col-md-12 col-sm-12" >
        	    <div class="page-header p-3 ">
    	<div class="row" style="margin-top:1rem">
                	<h2 style="color:black"> <b>Welcome</b> <span class="text-success" >
        <?php if(isset($_SESSION['admin']))
		{echo $_SESSION['admin'];}
		else {$_SESSION ['admin']='';}
		?>
        </span></h2>
        </div><!--row-->
        </div><!--pageheader-->
		
        </div><!--col-->
	</div><!--row-->
	
        	<div class="row" style="margin-top:1rem">
    			<div class="col-md-4 col-lg-4 col-sm-4" >
        		<div class="card bg-dark">
					<div class="card-header" style="color:white;font-size:25px;">
						<p style="text-align:center;margin-top: 1rem "><i class="fa fa-user-circle">&nbsp;Admin</i>
						</p>
					</div>
							<div class="card-body" style="margin-left:5.9rem;" id="box"> <!--animate id
                                                                                            =box main-->
									<a href="admin_list.php" class="btn  btn-outline-light " > View Detail
											<span class="badge badge-light">
											<?php
												$total="select admin_id from admin";
												$get_total=mysqli_query($connection,$total);
												$num=mysqli_num_rows($get_total);
												echo $num;
												?>
											</span>
									</a>
							</div>
            		</div><!--panel-->
            	</div><!--col-->
    			<div class="col-md-4 col-lg-4 col-sm-4" >
        		<div class="card bg-secondary">
                <div class="card-header" style="color:white;font-size:25px"><p style="text-align:center;margin-top: 1rem "><i class="fa fa-bicycle">&nbsp;Delivery Staff</i></p></div>
                <div class="card-body" style="margin-left:5.9rem;" id="box">
                <a href="deliverystaff_list.php" class="btn  btn-outline-light" > View Detail
                        <span class="badge badge-light">
                        	<?php
							$total="select delivery_id from delivery";
							$get_total=mysqli_query($connection,$total);
							$num=mysqli_num_rows($get_total);
							echo $num;
							?>
                                </span></a></div>
            		</div><!--panel-->
            	</div><!--col-->
    			<div class="col-md-4 col-lg-4 col-sm-4" >

        		<div class="card bg-success">
                <div class="card-header" style="color:white;font-size:25px">
               <p style="text-align:center ;margin-top: 1rem"> <i class="fa fa-list">&nbsp;Menu</i></p></div>
                <div class="card-body" style="margin-left:5.9rem;" id="box">
                <a href="menulist.php" class="btn  btn-outline-light" >View Detail
                        <span class="badge badge-light">
                        	<?php
							$total="select product_id from menu";
							$get_total=mysqli_query($connection,$total);
							$num=mysqli_num_rows($get_total);
							echo $num;
							?>
                                </span></a></div>
            		</div><!--panel-->
            	</div><!--col-->
                </div>
                <br>
        	<div class="row" style="margin-top:1rem">

    			<div class="col-md-4 col-lg-4 col-sm-4" >
        		<div class="card bg-primary">
                <div class="card-header" style="color:white;font-size:25px">
                <p style="text-align:center;margin-top: 1rem"><i class="fa fa-list-ol">&nbsp;Category</i></p></div>
                <div class="card-body" style="margin-left:5.9rem;" id="box">
                <a href="category.php" class="btn  btn-outline-light" > View Detail
                        <span class="badge badge-light">
                        	<?php
							$total="select cat_id from menucategory";
							$get_total=mysqli_query($connection,$total);
							$num=mysqli_num_rows($get_total);
							echo $num;
							?>
                                </span></a></div>
            		</div><!--panel-->
            	</div><!--col-->

    			<div class="col-md-4 col-lg-4 col-sm-4" >
        		<div class="card bg-info">
                <div class="card-header" style="color:white;font-size:25px"><p style="text-align:center;margin-top: 1rem"><i class="fa fa-folder">
                Order</i></p></div>
                <div class="card-body" style="margin-left:5.9rem;" id="box">
                <a href="order.php" class="btn btn-outline-light" >View Detail
                        <span class="badge badge-light">
                            <?php
                            $total="select order_id from orders";
                            $get_total=mysqli_query($connection,$total);
                            $num=mysqli_num_rows($get_total);
                            echo $num;
                            ?>
                                </span></a></div>
            		</div><!--panel-->
            	</div><!--col-->

    			<div class="col-md-4 col-lg-4 col-sm-4" >

        		<div class="card bg-danger">
                <div class="card-header" style="color:white;font-size:25px">
              <p style="text-align:center;margin-top: 1rem">  <i class="fa fa-address-book">&nbsp;Feedback</i></p></div>
                <div class="card-body" style="margin-left:5.9rem;" id="box">
                <a href="feedback.php" class="btn  btn-outline-light" >View Detail
                        <span class="badge badge-light">
                        	<?php
							$total="select feedback_id from feedback";
							$get_total=mysqli_query($connection,$total);
							$num=mysqli_num_rows($get_total);
							echo $num;
							?>
                                </span></a></div>
            		</div><!--panel-->
            	</div><!--col-->

            </div><!--row-->
</div><!--container-->
</body>
</html>