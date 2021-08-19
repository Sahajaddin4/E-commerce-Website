<?php
session_start();
if(!isset($_SESSION['aid']))
{

    header("location:index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2</title>

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
        <?php include("inc_admin/menu.php");  ?>
       
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
<?php include("inc_admin/top.php")  ?>
                
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">edit-cattagory</h1>
                    <?php

include("../inc/db.php");
$edit=$_GET['eid'];
$sel="SELECT * FROM cattagory WHERE cattagory_id='$edit' ";

$rs=$con->query($sel);
while($row=$rs->fetch_assoc()){
?>



                    <form action="update_ins_product.php" method="post" enctype="multipart/form-data">
                        <p>Name</p>
                        <p><input type="text" name="name" value="<?php echo $row['name'] ; ?>"></p>
                        <p><input type="submit" name="save" value="save"></p>
                        <input type="hidden" name="id" value="<?php echo $row['cattagory_id'] ?>">
                        


                    </form>
                    <?php
                }

                    ?>
                    
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php include ("inc_admin/footer.php");?>
            
