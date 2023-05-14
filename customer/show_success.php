<?php
	session_start();
	include'connect.php';
	include'function.php';
	$order_id=$_SESSION['order_id'];
	?>
<!DOCTYPE html>
<html >
<head>
 <title>August (Drinks & Fried Chicken)</title>
     <link rel="shortcut icon" href="photo/logo1.jpg">
</head>
<link rel="stylesheet" type="text/css" href="style/bootstrap.css"/>
<script type="text/javascript" src="style/jquery-1.10.2.js"></script>
<script type="text/javascript" src="style/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="style/icon/css/font-awesome.min.css"/>
<style type="text/css">
    .text{
        font-size:2.5rem;

    }
    
 
</style>
<body style="background-color: skyblue">

    <div class="container " style="margin-top:20px">
    	<div class="row">
        	<div class="col-md-12">
            	<h2><b style="color: ">Dear Customer,</b><strong>
            <span class="showname"  style="color: green">
                        <b>
                        <?php
                            if(!empty($_SESSION['customer_name']))
                            {
                                echo $_SESSION['customer_name'];
                            }
                            else
                            {
                                $_SESSION['customer_name']="";
                            }
                            ?>
                            </span>
                        </b>
            </strong></h2>
                <p  style="font-size: 20px;color: green">&nbsp;&nbsp;&nbsp; You Successfully sumitted the following products.Thank for your shopping here.</p>
               
                <table class="table  table-dark">
                	<tr>
                   		<td>
                        	<?php 
						$query="select * from orders where order_id='$order_id'";
                $go_query=mysqli_query($connection,$query);
                while($out=mysqli_fetch_array($go_query)){
                    $db_name=$out['delivery_name'];
                    $db_phone=$out['delivery_phone'];
                    $db_address=$out['delivery_address'];
                    }
							?>
                            <div class="panel panel-defult">
                            	<div class="panel-heading">
                                <h3><span class="fa fa-envelope"></span> &nbsp;Customer's Information!</h3>
                                </div><!--heading-->
                                <div class="panel-body pull-left">
                                    <div class="row">
            <p class="text">Customer Name&nbsp;<span class="fa fa-user"></span>&nbsp;=&nbsp;<?php echo $db_name;?></p>
            <p class="text">Customer Phone&nbsp;<span class="fa fa-phone"></span>&nbsp;=&nbsp;<?php echo $db_phone;?></p>
            <p class="text">Customer Address&nbsp;<span class="fa fa-home"></span>&nbsp;=&nbsp;<?php echo $db_address;?></p>

</div> 
                                </div><!--body-->
                            </div><!--panel-->
                            </td>
                           
                            <td>
                            <table class="table  table-hover" style="background-color: ">
                            <tr>
                            	<th colspan="4" style="font-size: 2.5rem"><span class="fa fa-list-alt"></span> Order Information</th>
                                </tr>
                            <tr class="table table-">
                            	<th>Product Name</th>
                                <th>Product Price</th>
                                <th>Product Qty</th>
                                <th>Unit Price</th>
                             </tr>
                             
                             <?php
							 	$total=0;
							$query="select order_detail.*,menu.* 
                                        from order_detail 
                                        left join menu on 
                                        order_detail.product_id = menu.product_id 
                                        where order_detail.order_id='$order_id'";
								$go_query=mysqli_query($connection,$query);
								while($out=mysqli_fetch_array($go_query))
								{
									$product_name=$out['product_name'];
									$price=$out['price'];
									$qty=$out['product_qty'];
									$unit_price=$qty*$price;
									$total+=$unit_price;


									echo"<tr>
									<td>{$product_name}<br></td>
									<td >{$price}<br></td>
									<td>{$qty}<br></td>
									<td>{$unit_price}&nbsp;MMK<br></td>
									</tr>";
								}
									?>
                                    <tr>
                                    	<td colspan="3" align="right" style="color:green">
                                        Total Amount :</td>
                                        <td><?php echo $total;?>&nbsp;MMK</td>
                                        </tr>

                                     </table>
                                     <a href="index.php" class="btn btn-success" role="button"><span class="fa fa-caret-left"></span> Back Home</a>
                                       
                                    
                                  
                                     </td>
                                     </tr>
                                     </table>
                                     </p>
                                     </div>
                                	     
                                     
                                
                            
            </div><!--col12-->
        </div><!--row-->
    </div><!--container-->
<hr>
</body>
</html>