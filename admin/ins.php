<?php 
include ("admin_inc/db.php");
if(isset($_POST['save'])){
$cn=$_POST['cname'];
$cp=$_POST['number'];

$ins="INSERT INTO customer SET cname='$cn',number='$cp'";
if($con->query($ins)){
    header("location:listcustomer.php");
}
?>

<?php } else{
    echo "403 Access Denied";
}
?>