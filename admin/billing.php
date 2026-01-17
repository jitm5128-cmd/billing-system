<?php 
session_start();
if(!isset($_SESSION['an'])){
header("location:index.php");
}
include ("admin_inc/db.php");
$id=$_GET['bid'];
$sel="SELECT * FROM customer WHERE cid='$id'";  
$rs=$con->query($sel);
$row=$rs->fetch_assoc();
?>

<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Blank</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <style>
        .ck-content{
            height: 230px;
        }

    </style>


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include("admin_inc/sidebar.php") ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
               <?php include("admin_inc/topbar.php") ?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Bill System</h1>
                 
                       <p>Name: <?php echo $row['cname']; ?></p>
                      
                       <p>Contact Number: <?php echo $row['number']; ?></p>

                       <form action="bins.php" method="post">
                       <input type="hidden" name="id" value="<?php echo $row['cid']?>">
                       <input type="hidden" name="customer_name" value="<?php echo $row['cname']?>">
                       <input type="hidden" name="customer_number" value="<?php echo $row['number']?>">

                       <p>Barcode:</p>
                       <p><input type="text" name="bar"></p>
                       
                        <p><input type="submit" name="save" value="Submit"></p>
                      </form>
                      <table class="table table-striped">

                      <thead>
      <tr>
        <th>Customer_id</th>
        <th>Customer_Name</th>
        <th>Customer_Number</th>
        <th>Product_Name</th>
        <th>Product_price</th>
        <th>Barcode</th>
        <th>Delete</th>
        
      </tr>
    </thead>
    <tbody>
        <?php  
        $sel="SELECT * FROM masterorder";  
        $rs=$con->query($sel);
        $total=0;
        while($row=$rs->fetch_assoc()){
            $total=$total+$row['product_price'];
        ?>
        <tr>
            <td> <?php echo $row['cid']; ?></td>
            <td> <?php echo $row['customer_name']; ?></td>
            <td> <?php echo $row['customer_number']; ?></td>
            <td> <?php echo $row['product_name']; ?></td>
            <td> <?php echo $row['product_price']; ?></td>
            <td> <?php echo $row['barcode']; ?></td>


            <td><a onclick="return confirm('Are You Sure?');" href="deleteb.php?bbid=<?php echo $row['id']; ?>& cid=<?php echo $row['cid'];?>"class="btn btn-danger">Delete</a></td>
            
        </tr>
        <?php } ?>
    </tbody>

                      </table>


                      <form action="confirmorder.php" method="post">
                        <h3> Grand Total: <?php echo $total;?></h3>
                      <input type="hidden" name="cid" value="<?php echo $id; ?>">
                      <p><input type="submit" name="save" value="Confirmorder"></p>

                      </form>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
           <?php include("admin_inc/footer.php") ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
   <?php include("admin_inc/logout.php") ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>