<?php 
include ("admin_inc/db.php");
if(isset($_POST['save'])){
$cn=$_POST['cname'];
$cp=$_POST['number'];

$ins="INSERT INTO customer SET cname='$cn',number='$cp'";
$con->query($ins);
?>

<?php } else{
    echo "403 Access Denied";
}
?>