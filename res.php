<?php
session_start();
require("connection.php");
$email=$_POST['email'];
$password=$_POST['password'];


$result=mysqli_query($con,"insert into cust values(DEFAULT,'$email','$password',0)");
if($result){
    echo "success";
    
    $sql=mysqli_query($con,"select cid from cust where email='$email'");
    $row=mysqli_fetch_assoc($sql);
    $_SESSION['cid']=$row['cid'];
      header("Location:index.php");
//    con_close($con);

echo $_SESSION['cid'];

}else {
      echo "error";
}

?>