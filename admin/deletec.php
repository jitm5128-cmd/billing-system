<?php
include ("admin_inc/db.php");
$id=$_GET['ccid'];
$d="DELETE FROM customer WHERE cid='$id'";
$con->query($d);
header("location:listcustomer.php");
?>