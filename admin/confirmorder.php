<?php 
include ("admin_inc/db.php");
if(isset($_POST['save'])){

$cid=$_POST['cid'];

$sel="SELECT * FROM masterorder WHERE cid='$cid'";
$rs=$con->query($sel);
while($row=$rs->fetch_assoc()){


    $nam=$row['customer_name'];
    $num=$row['customer_number'];
    $barc=$row['barcode'];
    $pna=$row['product_name'];
    $ppr=$row['product_price'];
    $odt=date("d-M-Y h:i:s A",time()+(4*3600)+30*60);

    echo $ins="INSERT INTO confirmorder SET cid='$cid',customer_name='$nam',customer_number='$num',barcode='$barc',product_name='$pna',product_price='$ppr',dtime='$odt'";
$con->query($ins);
}
 
$d="DELETE FROM masterorder WHERE cid='$cid'";
$con->query($d);

header("location:listbill.php");
?>

<?php } ?>