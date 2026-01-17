<?php
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['save'])){
    
$id=$_POST['id'];
$cna=$_POST['cname'];
$cnum=$_POST['number'];

    $upc="UPDATE customer SET cname='$cna',number='$cnum' WHERE cid='$id'";
}
if($con->query($upc)){
    header("location:listcustomer.php");
} else{
    echo "403 Access Denied";
}
?>