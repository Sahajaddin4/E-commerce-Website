<?php

session_start();
if(!isset($_SESSION['aid']))
{

    header("location:index.php");
}


if (isset($_POST['save'])) {
    



$n=$_POST['name'];




include("../inc/db.php");
$uid=$_POST['id'];
 $ins="UPDATE cattagory SET name='$n' WHERE cattagory_id='$uid' ";
$con->query($ins);
header("location:list_cattagory.php");



?>
<h1> Name: <?php echo $n; ?></h1>
<?php 
}
else
{
    echo "faild";
}
?>
