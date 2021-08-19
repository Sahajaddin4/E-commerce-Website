<?php

session_start();

include("inc/db.php");

?>



<!DOCTYPE html>
<html>
<head>
	<title>xyz shop</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<!-- Latest compiled JavaScript -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="custom.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<img src="bbm.jpg" class="banner">
				
			</div>
			
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php include("inc/menu.php");?>
				
			</div>
			
		</div>
		
    <div class="row">
    <div class="col-md-12">
    	<h1 class="heading">Cart</h1>
      <table class="table table-striped">
    <thead>
      <tr>
        <th>Product name</th>
        <th>Image</th>
        <th>Price</th>
        <th>Qty</th>
        <th>Total</th>
        <th>remove</th>
      </tr>
    </thead>
    <tbody>
    	<?php 
    	$total=0;
    	$cid=$_SESSION['cid'];
    	$sel="SELECT cart.*, product.name,product.img FROM cart INNER JOIN product ON cart.pid=product.product_id WHERE cid='$cid'";
    	$rs=$con->query($sel);
    	while($row=$rs->fetch_assoc()){
        $total=$total+$row['total'];
    	?>

      <tr>
      	<td><?php echo $row['name']; ?></td>
      	<td> <img style="width: 60px;" src="admin/upload_pic/<?php echo $row['img']; ?>" alt="Card image"></td>
      	<td><?php echo $row['price']; ?></td>
      	<td><?php echo $row['qty']; ?></td>
      	<td><?php echo $row['total']; ?></td>
        <td><a onclick="return confirm('are you confirm?'); "href="del_cart.php?cart_id=<?php echo $row['cart_id']; ?>" class="btn btn-danger">delete</a></td>
        
      </tr>
    <?php  } ?>
    <tr>
    	<td colspan="4" style="text-align:right">Sub Total</td>
    	<td><?php echo $total; ?></td>

    </tr>

    </tbody>
  </table>
  <a href="checkout.php" class="btn btn-success">Checkout</a>
    </div>
  </div>
    <div class="row">
  
  <div class="col-md-12">
    

 
  <p class="ft">&copy; @all right resaved xyz shpping.
  
  </p>



</div>
</div>

		<?php include("inc/modal.php");?>

</body>
</html>