<?php
session_start();
if(!isset($_SESSION['aid']))
{

    header("location:index.php");
}


if (isset($_POST['save'])) {
    



$n=$_POST['name'];
$p=$_POST['value'];

$cat=$_POST['category'];



if($_FILES['jmgg']['name']!=""){


$fn=time().$_FILES['jmgg']['name'];

$extarr=explode(".", $fn);
$exta=array_reverse($extarr);
$ext=$exta[0];
if($ext=='jpg' || $ext=='png' || $ext=='jpeg'){
    $buf=$_FILES['jmgg']['tmp_name'];
    move_uploaded_file($buf, "upload_pic/".$fn);
    include("../inc/db.php");

include("../inc/db.php");
echo $ins="INSERT INTO product SET name='$n',price='$p',img='$fn',cat_id='$cat' ";
$con->query($ins);
header("location:list_product.php");




}
else{

    echo" not proper form";
}


}



?>
<h1> Name: <?php echo $n; ?></h1>
<h1> value: <?php echo $p; ?></h1>

<?php 
}
else
{
    echo "faild";
}
?>