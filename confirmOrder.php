<?php
require("connection.php");
session_start();
$pid = $_SESSION['pid'];
$cid = $_SESSION['cid'];
$aid = $_SESSION['aid'];
$sql=mysqli_query($con,"SELECT price FROM product where pid = $pid ");
$row=mysqli_fetch_assoc($sql);
$amount = $row['price'] ;

$sql = mysqli_query($con,"INSERT into custorder values(DEFAULT,$amount+40,1,0,'COD',4,1,$pid,$cid,$aid)");

if($sql){


    echo "<script>
    alert('order placed successfully');
    window.location.href='orderConfirmDisplay.php?oid=$con->insert_id';
    </script>";
}else{
    echo "error";
}


?>