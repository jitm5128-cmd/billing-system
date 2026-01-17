<?php
session_start();
include ("admin_inc/db.php");
if(isset($_POST['save'])){
$n=$_POST['pname'];
$p=$_POST['pprice'];
$d=$_POST['pdes'];
$date=$_POST['dt'];
$c=$_POST['cate'];
$b=$_POST['bar'];

$buf=$_FILES['pimg']['tmp_name'];
$fn=$_FILES['pimg']['name'];
move_uploaded_file($buf,"prod_img/".$fn);

$ins="INSERT INTO details SET name='$n',cate='$c', bar='$b',img='$fn',price='$p',description='$d',date='$date' ";
if($con->query($ins)){
    header("location:listproduct.php");
}
?>
<h1>Name:<?php echo $n; ?></h1>
<h1>price:<?php echo $p; ?></h1>
<h1>Description:<?php echo $d; ?></h1>
<h1>Date:<?php echo $date; ?></h1>
<h1>category:<?php echo $b; ?></h1>

<?php } else{
    echo "403 Access Denied";
}
?>