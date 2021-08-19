
<?php
session_start();
if(!isset($_SESSION['aid']))
{

    header("location:index.php");
}
?>
?>


 


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
                    <h1 class="h3 mb-4 text-gray-800">list-product</h1>
                   <?php  


include("../inc/db.php");
$sel="SELECT product.*,cattagory.name as cname FROM product INNER JOIN cattagory ON product.cat_id=cattagory.cattagory_id";
$rs=$con->query($sel);

?>
             
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2><a href="add_product.php" class="btn btn-success">ADD</a></h2>
             
  <table class="table">
    <thead>
      <tr>
         <th>Category</th>
        <th>name</th>
        <th>price</th>
        <th>product copy</th>
        <th>remove</th>
        <th>update</th>
        

        
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php
     while($row=$rs->fetch_assoc()){
        ?>
        <tr>
             <td><?php echo $row['cname'];  ?></td>
        <td><?php echo $row['name'];  ?></td>
        <td><?php echo$row['price'];?></td>

        <td><img src="upload_pic/<?php echo $row['img']; ?>" style="width:120px;"></td>
        
            <td><a onclick="return confirm('are you sure?');" href="del_product.php?product_id=<?php echo $row['product_id']; ?>" class="btn btn-danger">delete</a>
                <td><a onclick="return confirm('are you confirm?');" href="update_product.php?eid=<?php echo $row['product_id'] ?>" class=" btn btn-success">update</a></td>

      
    </tr>
            </td>
        
        <?php


     }
     ?>





        
      </tr>
    </tbody>
  </table>
</div>

</body>
</html>






                  


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php include ("inc_admin/footer.php");

            ?>
