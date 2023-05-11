<?php
require("connection.php");
session_start();



if (isset($_POST['submit'])){

   $ran=rand(0,10000);

$fname=$_POST['fname']." ".$_POST['lname'];
$sname=$_POST['sname'];
$stype=$_POST['stype'];
$pin=$_POST['pin'];
$cnum=$_POST['cnum'];
$address=$_POST['address'];
// $p=$_FILES['gst'];   
// print_r($p);

$lbill=$ran.$_FILES['lbill']['name'];
$gst=$ran.$_FILES['gst']['name'];

$tlbill=$_FILES['lbill']['tmp_name'];
$tgst=$_FILES['gst']['tmp_name'];

// $tgst=$_FILES['gst']['error'];
move_uploaded_file($tlbill,"docment1/$lbill");
move_uploaded_file($tgst,"docment2/$gst");

$cid=$_SESSION['cid'];

$result=mysqli_query($con,"insert into shop values($cid,'$fname','$sname','$stype','$pin','$cnum','$lbill','$gst','$address',0)");
if($result){
    echo "success";
    header("location:status.php");


}else {
      echo "error";
}

}

?>