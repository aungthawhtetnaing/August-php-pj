<?php
	session_start();
	include "connect.php";
	include "header.php";
	$feedback=mysqli_query($connection,"select * from feedback order by feedback_id asc");
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
		background:lightblue;
		background-size: cover;

	}
	
</style>

</head >
<body id="body">
	<br>
<div class="container top">
	<div class="row">
    
    <div class="col-md-12">	
    <div class="page-header">
    	<div class="row"><h2> <span class="fa fa-users" > &nbsp;<b >Customer Feedback</b></span>
        </h2></div ><!--row1-->
        </div><!--pageheader-->
    </div><!--col md 12-->
   
    </div><br>
    	<div class="row">
 <table class="table  table-hover " width="100%" height="auto">
  				<tr class="table-secondary table-bordered ">
   				 	<th style="text-align: center;">No</th>
    				<th style="text-align: center;">User Name</th>
   				 	<th style="text-align: center;">Email</th>
   				 	<th style="text-align: center;">Subject</th>
  				  	<th style="text-align: center;">Message</th>
  				</tr>
  
  	<?php
		while($out=mysqli_fetch_array($feedback))
		{	
		   
		   $show='<tr  class="table table-hover">' ;
           $show.='<td style="text-align: center;">'.$out['feedback_id'].'</td>';
		   $show.='<td style="text-align: center;">'.$out['name'].'</td>';	
		   $show.='<td style="text-align: center;">'.$out['email'].'</td>';	  
		   $show.='<td style="text-align: center;">'.$out['subject'].'</td>';
		   $show.='<td>'.$out['message'].'</td>';
		   $show.='</tr>';
		   
		 	echo $show; 
		 }
  	?>
</table>

        </div><!--row2-->
    </div><!--row-->
</div><!--container-->
</body>
</html>