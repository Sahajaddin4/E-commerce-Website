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
			<h1 class="heading">our product</h1>
			
		</div>
    <div class="row">

      <div class="col-md-3 ">

      <?php
include("inc/cat.php");
?>
      </div>
      <div class="col-md-9">
        
        <div class="row">
         <?php
         if(isset($_GET['cat'])){
          $c=$_GET['cat'];
         }else{
          $c="";
         }
$sel="SELECT * FROM product WHERE cat_id='$c'";
$rs=$con->query($sel);
while($row=$rs->fetch_assoc()){
?>
      <div class="col-md-3">
        <div class="card" >
  <img class="card-img-top" src="admin/upload_pic/<?php echo $row['img']; ?>" alt="Card image">
  <div class="card-body">
    <h4 class="card-title"><?php echo $row['name'];  ?></h4>
     <h4 class="card-title"><?php echo$row['price'];?></h4>

    
    <a href="#" class="btn btn-primary">Add to cart</a>
  </div>
</div>
        
      </div>
      <?php
    }
    ?>

      
    </div>
  </div>
    <div class="row">
  
  <div class="col-md-12">
    

 
  <p class="ft">&copy; @all right resaved abc resturant.
  
  </p>



</div>
</div>

		<?php include("inc/modal.php");?>

</body>
</html>