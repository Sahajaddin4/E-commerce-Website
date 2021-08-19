<?php
session_start();
if(!isset($_SESSION['aid']))
{

    header("location:index.php");
}

include("../inc/db.php");



$did=$_GET['del_id'];




$del="DELETE FROM cattagory WHERE cattagory_id='$did'";
$con->query($del);


header("location:list_cattagory.php");



?>
