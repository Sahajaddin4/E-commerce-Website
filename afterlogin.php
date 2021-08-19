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
        <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">shoppers</a>

  <!-- Toggler/collapsibe Button -->
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>

  <!-- Navbar links -->
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cart <span class="badge badge-danger badge-pill">8
        </span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact us</a>
    </ul>
    <ul class="navbar-nav ml-auto">
      <li class=" nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#profile" >profile</a>

      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logout">logout </a>
      </li>


    </ul>

  </div>
</nav>
        
      </div>
      
    </div>
    <div class="row">
      <h1 class="heading">our product</h1>
      
    </div>
    <div class="row">

      <div class="col-md-3 ">

      <form action="search.php" method="post">
        <p><input type="text" name="abcd" class="form-control"></p>
        <p><input type="submit" class ="btn btn-success" value="search"></p>

        

      </form>
      <ul class="list-group">
  <li class="list-group-item active">cattagoris</li>
  <?php
   $sel="SELECT * FROM cattagory";
$rs=$con->query($sel);
while($row=$rs->fetch_assoc()){

  ?>
  <li class="list-group-item"><?php  echo $row['name'];?></li>
  <?php
}
  ?>
</ul>
      </div>
      <div class="col-md-9">
        
        <div class="row">
         <?php
$sel="SELECT * FROM product";
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
    

 
  <p class="ft">&copy; @all right resaved shoppers.
  
  </p>



</div>
</div>

    

</div>
    




</body>
</html>