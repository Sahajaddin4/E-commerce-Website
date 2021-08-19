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
                    <h1 class="h3 mb-4 text-gray-800">List Order</h1>
                    <?php  


include("../inc/db.php");
$sel="SELECT * FROM bill";
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
  
             
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Phone</th>
        <th>Total</th>

        <th>View Details</th>
    
        
      </tr>
    </thead>
    <tbody>
      <tr>
        <?php
     while($row=$rs->fetch_assoc()){
        ?>
        <tr>
        <td>



        <div class="modal" id="myModal<?php echo $row['order_id'] ?>">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">View details</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

        <h2>Customer Details</h2>

      <div class="row">
        <div class="col-md-6">
        <p>Billing name: <?php echo $row['billing_name'] ?></p>
      
        <p>Billing phone: <?php echo $row['billing_phone'] ?></p>
        <p>Billing address: <?php echo $row['billing_address'] ?></p>
      </div>
              <div class="col-md-6">
        <p>Shipping name: <?php echo $row['shipping_name'] ?></p>
      
        <p>Shipping phone: <?php echo $row['shipping_phone'] ?></p>
        <p>Shipping address: <?php echo $row['shipping_address'] ?></p>
      </div>
    </div>

        <table class="table table-striped">
    <thead>
      <tr>
        <th>Product Name</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Total</th>
      </tr>
    </thead>
    <tbody>
      <?php $order_id=$row['order_id'];
       $total=0;
        $sels="SELECT * FROM sub_order WHERE order_id='$order_id'";
        $rss=$con->query($sels);
        while($rows=$rss->fetch_assoc()){
          $total=$total+($rows['qty']*$rows['price']);

          $pid=$rows['pid'];

          $selp="SELECT * FROM product WHERE product_id='$pid'";
          $rsp=$con->query($selp);
          while($rowp=$rsp->fetch_assoc()){


            ?>

      <tr>
        <td><?php echo $rowp['name']?></td>
        <td><?php echo $rows['price']?></td>
        <td><?php echo $rows['qty']?></td>
        <td><?php echo $rows['qty']*$rows['price'];?></td>
      </tr>
       <?php


          }

      } ?>
      <tr>
          <td colspan="3" align="right">Sub Total</td>
          <td><?php echo $total;?></td>
      </tr>
    </tbody>
  </table>
       
           
      </div>

     
    </div>
  </div>
</div>

            <?php echo $row['billing_name'];  ?></td>
        <td><?php echo $row['billing_phone'];  ?></td>
        <td>
            <?php 
            $order_id=$row['order_id'];
            $sum="SELECT SUM(total) FROM sub_order WHERE order_id='$order_id'";
            $rssum=$con->query($sum);
            $totalsum=$rssum->fetch_assoc();
            echo $totalsum['SUM(total)'];

            ?>
        </td>
        <td><button class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo $row['order_id'] ?>">View More</button></td>
        
            
    </tr>
        
        
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

            <?php include ("inc_admin/footer.php");?>