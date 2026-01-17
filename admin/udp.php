<?php
$con=mysqli_connect("localhost","root","","project");
if(isset($_POST['save'])){
$n=$_POST['pname'];
$p=$_POST['pprice'];
$d=$_POST['pdes'];
$date=$_POST['dt'];
$c=$_POST['cate'];
$b=$_POST['bar'];

$id=$_POST['id'];

if(isset($_FILES['pimg']['name']) && $_FILES['pimg']['name']!=""){

$buf=$_FILES['pimg']['tmp_name'];
$fn=$_FILES['pimg']['name'];
move_uploaded_file($buf,"prod_img/".$fn);

$up="UPDATE details SET name='$n',cate='$c', bar='$b',img='$fn',price='$p',description='$d',date='$date' WHERE productid='$id'";
}else{
    $up="UPDATE details SET name='$n',cate='$c', bar='$b',price='$p',description='$d',date='$date' WHERE productid='$id'";
}
if($con->query($up)){
    header("location:listproduct.php");
}

} else{
    echo "403 Access Denied";
}
?>