<?php
session_start();
if(empty($_SESSION['customer_name'])){header("location:login.php");}
else{
$id=$_GET['id'];
$_SESSION['cart'][$id]++;
header("location:menu.php");}
?>
