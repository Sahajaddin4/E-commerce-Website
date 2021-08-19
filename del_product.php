<?php
session_start();
if(!isset($_SESSION['aid']))
{

    header("location:index.php");
}
include("../inc/db.php");

$did=$_GET['product_id'];

$sel="SELECT * FROM product WHERE product_id='$did'";
$rs=$con->query($sel);
while ($row=$rs->fetch_assoc()) {
	unlink("upload_pic/".$row['img']);
	// code...
}

$del="DELETE FROM product WHERE product_id='$did'";
$con->query($del);

header("location:list_product.php");



?>
