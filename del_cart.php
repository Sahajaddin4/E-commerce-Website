<?php
session_start();
if(!isset($_SESSION['aid']))
{

    header("location:index.php");
}
include("inc/db.php");

$did=$_GET['cart_id'];

$sel="SELECT * FROM cart WHERE cart_id='$did'";
$rs=$con->query($sel);
//while ($row=$rs->fetch_assoc()) {
	//unlink("upload_pic/".$row['img']);
	// code...
//}

$del="DELETE FROM cart WHERE cart_id='$did'";
$con->query($del);

header("location:cart.php");



?>
