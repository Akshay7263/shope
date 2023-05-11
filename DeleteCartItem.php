<?php
require("connection.php");
session_start();

$oid=  $_GET['oid'];
$sql=mysqli_query($con,"DELETE  FROM custorder where oid = $oid ");
if($sql){
  header("location:cart.php");

}else{
    echo "error";
}
?>