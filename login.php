<?php
session_start();
require('connection.php'); 
$email=$_POST['email'];
$password=$_POST['password'];

$result=mysqli_query($con,"select cid from cust where email='$email' and password='$password'");
if(mysqli_num_rows($result)==0){
    echo "not account found";

}else{
        $row=mysqli_fetch_assoc($result);
        $_SESSION['cid']=$row['cid'];
        header("Location:index.php");
        // echo $_SESSION['cid'];


}



?>