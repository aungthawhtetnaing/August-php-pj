<?php
session_start();
$id=$_GET['id'];
foreach($_SESSION['cart']as $key=>$value){
	if($value==1&&$id==$key){
		unset($_SESSION['cart'][$key]);
		}else{
			if($id==$key){
				$reduce_qty=$value-1;
				$_SESSION['cart'][$key]=$reduce_qty;
				}
			}
	
	
	}
header("location:cart.php");


?>