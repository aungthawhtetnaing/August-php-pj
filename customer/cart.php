<?php
session_start();
include 'connect.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <title>August (Drinks & Fried Chicken)</title>
     <link rel="shortcut icon" href="photo/logo1.jpg">
<link rel="stylesheet" href="style/bootstrap.css">
  <script src="style/jquery-1.10.2.js"></script>
  <script src="style/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="style/icon/css/font-awesome.min.css"/>
<link rel="stylesheet" type="text/css" href="#"/>
</head>

<body >
	<div class="container" >
    		<div class="row">
                	<div class="well well-sm">
                    	<h3>
                             <b>Welcome User</b>&nbsp;<span class="fa fa-user"></span>&rArr;
                                <span class="showname" style="color:  green">
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
                                    </b>
                                </span>

                        </h3>
                    </div>
                </div> 
                
                <div class="row">
                	<div class="panel" style="background-color:skyblue">
                    	<div class="panel-heading">
                        	<h2 style="text-align: center;"><b><i class="fa fa-shopping-cart"  style="font-size:30px;"></i> &nbsp;Shopping Cart</b></h2>
                        </div>
                        
                        <?php if(!empty($_SESSION['cart'])):?>
                        <div class="panel-body" style="background-color:white" >
                        	<table  class="table table-condensed">
                            	<tr>
                                	<th>Photo</th>
                                    <th>Name</th>
                                    <th>Quatity</th>
                                    <th>Unit Price</th>
                                    <th>Price</th>
                                    <th>Action</th>
                                </tr>
                        <?php 
								$total=0;
								foreach($_SESSION['cart']as $id=>$qty):
								$result=mysqli_query($connection,"select * from menu where product_id=$id");
								$row=mysqli_fetch_assoc($result);
								$total+=$row['price'] *$qty;
						?>
                                <tr>
                                	<td><img src="photo/<?php echo $row['photo'];?>" width="100" height="100" class="img img-thumbnail" /></td>
                                    <td><?php echo $row['product_name']?></td>
                                    <td> 
                                    <a href="decrease_qty.php?id=<?php echo $id?>" class="fa fa-minus"></a>
										<?php echo $qty;?>
      								
                                     <a href="increase_qty.php?id=<?php echo $id?>"  class="fa fa-plus"></a> 
                                    </td>
                                    <td><?php echo $row['price'];?></td>
                                    <td><?php echo $row['price']*$qty;?></td>
                                    <td>
                                    <span style="margin:5px;"></span>
                                    <a href="remove.php?id=<?php echo $id?>" class="fa fa-remove" style="font-size:20px;" ></a>
                                    </td>
                                </tr>
<?php endforeach;?>
                                <tr>
                                	<td colspan="5" align="right"  style="color:green"><b>Total Amount :</b></td>
                                    <td><?php echo $total;?>&nbsp;MMK</td>
                                </tr>
                            </table>
                        </div>
                        
                        <div class="panel-footer">
                        	<a href="clear.php" class="btn btn-danger">Clear Cart</a>
                            <a href="menu.php" class="btn btn-default">Back</a>
                            <a href="submit_order.php" class="btn btn-success">Submit Order</a>
                        </div>
                    </div>
					<?php else:?>
                    <h3 class="text-danger lead text-center">You select no products now!</h3>
                    <p class="text-center"><a href="menu.php" class="btn btn-success">Shop Now</a></p>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>