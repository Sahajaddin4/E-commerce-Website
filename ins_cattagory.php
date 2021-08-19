<?php

session_start();
if(!isset($_SESSION['aid']))
{

    header("location:index.php");
}


if (isset($_POST['save'])) {
    



$n=$_POST['name'];




include("../inc/db.php");
 $ins="INSERT INTO cattagory SET name='$n' ";
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
