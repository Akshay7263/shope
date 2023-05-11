<?php
require("connection.php");
session_start();
echo $_SESSION["cid"];


$cid = $_SESSION['cid'];
$ran=rand(0,10000);

$pname=$_POST['pname'];
$ptype=$_POST['ptype'];
$pdetails=$_POST['pdetails'];
$price=$_POST['price'];
$qnt=$_POST['qnt'];

// $p=$_FILES['pimg2'];   
// print_r($p);

$pimg1=$ran.$_FILES['pimg1']['name'];
$pimg2=$ran.$_FILES['pimg2']['name'];
$pimg3=$ran.$_FILES['pimg3']['name'];

$tpimg1=$_FILES['pimg1']['tmp_name'];
$tpimg2=$_FILES['pimg2']['tmp_name'];
$tpimg3=$_FILES['pimg3']['tmp_name'];

// $tpimg2=$_FILES['pimg2']['error'];
move_uploaded_file($tpimg1,"productImage/$pimg1");
move_uploaded_file($tpimg2,"productImage/$pimg2");
move_uploaded_file($tpimg3,"productImage/$pimg3");

$result=mysqli_query($con,"insert into product values(DEFAULT,'$pname','$ptype','$price','$pdetails','$qnt','$pimg1','$pimg2','$pimg3','$cid')");
if($result){

    echo "<script>
    alert('Product Add successfully');
    window.location.href='AddProduct.html';
    </script>";

}else {
    echo "<script>
    alert('Product not Add ');
    window.location.href='AddProduct.html';
    </script>";
}



?>