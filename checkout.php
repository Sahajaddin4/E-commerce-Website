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

    <form action="insbill.php" method="post">
		
    <div class="row">
    
    	
      <div class="col-md-6">
        <h2>Billing Address</h2>
        <p>Please enter correct info</p>
        <p>Name</p>
        <p><input type="text" class="form-control" name="bname" placeholder="enter name" id="bname"></p>
        <p>Phone</p>
        <p><input type="text" class="form-control" name="bphone" placeholder="contact no" id="bphone"></p>
        <p>Address</p>
        <p><textarea name="baddress" class="form-control" id="baddress" placeholder="enter correct location"></textarea></p>

     
        </div>

        <div class="col-md-6">
        <h2>Shipping Address</h2>
        <p><label><input type="checkbox" id="ck"> Same as Billing</label></p>
        <p>Name</p>
        <p><input type="text" class="form-control" name="sname" id="sname"></p>
        <p>Phone</p>
        <p><input type="text" class="form-control" name="sphone" id="sphone"></p>
        <p>Address</p>
        <p><textarea name="saddress" class="form-control" id="saddress"></textarea></p>

        <p><input type="submit" class="btn btn-success" name="save" value="Confirm Order"></p>

     
        </div>
  </div>
</form>
    <div class="row">
  
  <div class="col-md-12">
    

 
  <p class="ft">&copy; @all right resaved xyz shpping.
  
  </p>



</div>
</div>

		<?php include("inc/modal.php");?>

    <script>
      $(function(){
        $("#ck").click(function(){
          if($("#ck").prop("checked")==true){
            var bn=$("#bname").val();
            var bp=$("#bphone").val();
            var ba=$("#baddress").val();

            $("#sname").val(bn);
            $("#sphone").val(bp);
            $("#saddress").val(ba);
            

          }else{
            $("#sname").val("");
            $("#sphone").val("");
            $("#saddress").val("");
          }
        })
      })
    </script>

</body>
</html>