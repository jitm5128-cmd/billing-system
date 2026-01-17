<?php
include ("admin_inc/db.php");
$id=$_GET['did'];
$d="DELETE FROM details WHERE productid='$id'";
$con->query($d);
header("location:listproduct.php");
?>