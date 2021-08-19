<?php
session_start();
include("inc/db.php");

if(isset($_POST['login'])){


$e=$_POST['email'];
$w=$_POST['password'];
$sel="SELECT * FROM signup WHERE email='$e' AND password='$w' ";
$rs=$con->query($sel);
if($rs->num_rows>0)
{
	while($row =$rs->fetch_assoc()){
		$_SESSION['cid']=$row['id'];
		$_SESSION['cname']=$row['name'];
		header("location:index.php");
	}
	
		
		
	
}


else
{
	?>
	<script>
		
		alert("invalid login....!");
		window.location="index.php";
	</script>
	<?php
}

}
?>