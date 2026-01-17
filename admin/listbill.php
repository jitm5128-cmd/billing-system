<?php 
include("admin_inc/db.php");
session_start();
if(!isset($_SESSION['an'])){
header("location:index.php");
}
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
                    <h1 class="h3 mb-4 text-gray-800">list Bill</h1>

                    <table class="table">
                    <thead>
      <tr>
        <th>customer Name</th>
        <th>customer Number</th>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>D&T</th>
        <th>Barcode</th>
        <th>Delete</th>
      
        
      </tr>
    </thead>
    <tbody>
        <?php  
        $sel="SELECT * FROM confirmorder";  
        $rs=$con->query($sel);
        while($row=$rs->fetch_assoc()){
        ?>
        <tr>
            <td> <?php echo $row['customer_name']; ?></td>
            <td> <?php echo $row['customer_number']; ?></td>
            <td> <?php echo $row['product_name']; ?></td>
            <td> <?php echo $row['product_price']; ?></td>
            <td> <?php echo $row['dtime']; ?></td>
            <td> <?php echo $row['barcode']; ?></td>
            <td><a onclick="return confirm('Are You Sure?');" href="deletel.php?didl=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
            
                </tr>
        <?php } ?>
    </tbody>
  </table>
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