<?php 
require("connection.php");
//include('header.php');
session_start();
//echo $_SESSION["cid"];


$cid = $_SESSION['cid'];




        $cname = $_POST['cname'];
		$city = $_POST['custcity'];
		$flatno = $_POST['flat'];
		$landmark = $_POST['land'];
		$pincode = $_POST['pin'];
		$contact = $_POST['contactnum'];
		
		$sql = mysqli_query($con,"insert into address values(DEFAULT,'$cname','$city','$flatno','$landmark','$pincode','$contact','$cid')");
		if($sql){		
			$_SESSION['aid'] = $con->insert_id;
			header("location:orderPayment.php");
		}
?>