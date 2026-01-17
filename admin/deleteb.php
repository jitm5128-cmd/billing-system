<?php
include ("admin_inc/db.php");
$id=$_GET['bbid'];
$d="DELETE FROM masterorder WHERE id='$id'";
$con->query($d);
header("location:billing.php?bid=".$_GET['cid']);
?>