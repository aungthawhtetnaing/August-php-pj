<?php
  $dbhost = "localhost";
  $dbuser = "root";
  $dbpass = "";
  $dbname = "crm";

  $conn = mysql_connect($dbhost, $dbuser, $dbpass);
  mysql_select_db($dbname, $conn);
?>

