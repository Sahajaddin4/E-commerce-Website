<?php

session_start();

include("inc/db.php");


if(isset($_POST['act'])){
	$pid=$_POST['pid'];
	$price=$_POST['price'];

    $qty=$_POST['qty'];
    $cid=$_SESSION['cid'];
    $total=$qty*$price;

$sel="SELECT * FROM cart WHERE pid='$pid' AND cid='$cid'";
$rs=$con->query($sel);
if($rs->num_rows>0){
	while($row=$rs->fetch_assoc()){
		$fqty=$row['qty']+$qty;
		$ftotal=$price*$fqty;
		$upd="UPDATE cart SET qty='$fqty',total='$ftotal' WHERE pid='$pid' AND cid='$cid'";
		$con->query($upd);

	}

}else{

	$ins="INSERT INTO cart SET pid='$pid',cid='$cid',price='$price',qty='$qty',total='$total'";
    $con->query($ins);
}




}
header("location:cart.php");

?>
