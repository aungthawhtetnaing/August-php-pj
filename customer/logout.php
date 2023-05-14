<?php
session_start();
unset($_SESSION['customer_name']);
unset($_SESSION['cart']);
header("location:index.php");
?>