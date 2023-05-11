<?php
require("connection.php");
session_start();
$pid = $_SESSION['pid'];
$cid = $_SESSION['cid'];
$sql=mysqli_query($con,"SELECT price FROM product where pid = $pid ");
$row=mysqli_fetch_assoc($sql);
$amount = $row['price'] ;

$sql = mysqli_query($con,"INSERT into custorder values(DEFAULT,$amount+40,0,0,null,0,0,$pid,$cid,0)");
if($sql){
    header('location:ProductView.php?pid='.$pid);

}else{
    echo "error";
}


?>