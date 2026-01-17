<?php 
session_start();
if(!isset($_SESSION['an'])){
header("location:index.php");
}

include ("admin_inc/db.php");
$id=$_GET['eid'];
$sel="SELECT * FROM details WHERE productid='$id'";
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
                    <h1 class="h3 mb-4 text-gray-800">Add product</h1>
                    <form action="udp.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $row['productid']; ?>">
                        <p>Category</p>
                        <p>
                            <select name="cate" value="<?php echo $row['cate']?>">
                                <option value="">-Select-</option>
                                <option <?php if($row['cate']=="Fashion"){echo "selected";} ?> value="Fashion">Fashion</option>
                                <option <?php if($row['cate']=="Grocery"){echo "selected";} ?> value="Grocery">Grocery</option>
                                <option <?php if($row['cate']=="Mobiles"){echo "selected";} ?> value="Mobiles">Mobiles</option>
                                <option <?php if($row['cate']=="Toys"){echo "selected";} ?> value="Toys">Toys</option>
                                <option <?php if($row['cate']=="Foods"){echo "selected";} ?> value="Foods">Foods</option>
                                <option <?php if($row['cate']=="Personal care"){echo "selected";} ?> value="Personal care">Personal care</option>
                            </select>
                        </p>
                        <p>Product Name:</p>
                        <p><input type="text" name="pname" value="<?php echo $row['name']?>"></p>
                        <p>Product price:</p>
                        <p><input type="text" name="pprice" value="<?php echo $row['price']?>"></p>
                        <p>Product Image:</p>
                        <p><input type="file" name="pimg" value="<?php echo $row['img']?>"></p>
                        <p><img width="100px" class="project" src="prod_img/<?php echo $row['img']; ?>" /></p>
                        <p>Date</p>
                        <p><input type="date" name="dt" value="<?php echo $row['date']?>"></p>
                        <p>Barcode</p>
                        <p><input type="text" name="bar" value="<?php echo $row['bar']?>"></p>
                        
                        <p>Product Description:</p>
                        <textarea name="pdes" id="editor" value="<?php echo $row['description']?>"></textarea>
                        <script>
                            ClassicEditor
                            .create( document.querySelector( '#editor' ) );
                        </script>
                        <p><input type="submit" name="save" value="Add Product"></p>
                        
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




