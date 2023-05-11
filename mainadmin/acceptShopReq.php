<?php
require('connection.php');

$sid=$_GET["sid"];
$result=mysqli_query($con,"update shop set status=1 where sid='$sid'");
if($result){
    header("Location:shopreq.php");
}else{
    echo "failed to update";
}
