<?php

session_start();

include("inc/db.php");


if(isset($_POST['save'])){
$bname=$_POST['bname'];
$bphone=$_POST['bphone'];
$baddress=$_POST['baddress'];
$sname=$_POST['sname'];
$sphone=$_POST['sphone'];
$saddress=$_POST['saddress'];
$cid=$_SESSION['cid'];
$odate=date("d-M-Y",time());

$insbill="INSERT INTO bill SET billing_name='$bname',billing_phone='$bphone',billing_address='$baddress',shipping_name='$sname',shipping_phone='$sphone',shipping_address='$saddress',customer_id='cid',order_date='$odate'";
$con->query($insbill);

$order_id=$con->insert_id;



$sel="SELECT * FROM cart WHERE cid='$cid'";
$rs=$con->query($sel);
while($row=$rs->fetch_assoc()){
	$pid=$row['pid'];
	$cid=$row['cid'];
	$qty=$row['qty'];
	$price=$row['price'];
	$total=$row['total'];

	$ins="INSERT INTO sub_order SET order_id='$order_id',pid='$pid',cid='$cid',qty='$qty',price='$price',total='$total'";
	$con->query($ins);

}

$del="DELETE FROM cart WHERE  cid='$cid'";
$con->query($del);


}




?>

<h1  style="text-align:center; margin-top: 100px;">Order done successfully</h1>

<script >
	setTimeout(function(){ 
		window.location="index.php";

	}, 2000);
</script>