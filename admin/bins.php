<?php
include ("<admin_inc/db.php");

if(isset($_POST['save'])){
$ci=$_POST['id'];
$cnam=$_POST['customer_name'];
$cnumb=$_POST['customer_number'];
$barcode=$_POST['bar'];


$sel="SELECT * FROM details WHERE bar='$barcode'";
$rs=$con->query($sel);
$row=$rs->fetch_assoc();

$pn=$row['name'];
$pp=$row['price'];

$ins="INSERT INTO masterorder SET cid='$ci',customer_name='$cnam',customer_number='$cnumb',barcode='$barcode',product_name='$pn',product_price='$pp'";
$con->query($ins);

?>

<h1>Customer_Name:<?php echo $cnam; ?></h1>
<h1>Customer_number:<?php echo $cnumb; ?></h1>
<h1>Barcode:<?php echo $barcode; ?></h1>

<?php } 
?>