<?php
include ("admin_inc/db.php");
$id=$_GET['didl'];
$d="DELETE FROM confirmorder WHERE id='$id'";
$con->query($d);
header("location:listbill.php");
?>