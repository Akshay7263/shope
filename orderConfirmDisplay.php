<?php
require("connection.php");
session_start();
$oid = $_GET['oid'];
$cid = $_SESSION['cid'];

$sql=mysqli_query($con,"SELECT oid,pimg,pname,amount,pstatus,cname,paymode,city,DIn,flatno,landmark,pincode,contact,price from custorder co,address a,product p where p.pid=co.pid and a.cid=co.cid and OorC = 1 and co.cid = $cid and a.ano = co.aid and oid=$oid");

$row=mysqli_fetch_assoc($sql);
$Adderss = "city ".$row['city']."<br>".$row['landmark']."<br>".'flatNo'.$row['flatno']." India"." -".$row['pincode'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
body{
    background-color: #ffe8d2;
    font-family: 'Montserrat', sans-serif
}
.card{
    border:none
}
.logo{
    background-color: #eeeeeea8
}
.totals tr td{
    font-size: 13px
}
.footer{
    background-color: #eeeeeea8
}
.footer span{
    font-size: 12px
}
.product-qty span{
    font-size: 12px;
    color: #dedbdb
}

    </style>
</head>
<body>
    
<div class="">
<div class="d-flex flex-row align-items-center p-4 shadow">
    <a class="con" href="index.php"> 
    <i class="fa fa-long-arrow-left"></i>
    <span class="ml-2">Continue Shopping</span>
    </a>
</div>
</div>

<div class="container mt-5 mb-5">

        <div class="row d-flex justify-content-center">

            <div class="col-md-8">

                <div class="card">


                        <div class="text-left logo p-2 px-5">

                            <h2>Shop-e</h2>
                            

                        </div>

                        <div class="invoice p-5">

                            <h5>Your order Confirmed!</h5>

                            <span class="font-weight-bold d-block mt-4">Hello, <?php echo $row['cname'] ?></span>
                            <span>You order has been confirmed and will be shipped in next <?php echo $row['DIn']?> days!</span>

                            <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">

                                <table class="table table-borderless">
                                    
                                    <tbody>
                                        <tr>
                                           

                                            <td>
                                                <div class="py-2">

                                                    <span class="d-block text-muted">Order No</span>
                                                <span><?php echo $row['oid'] ?></span>
                                                    
                                                </div>
                                            </td>

                                            <td>
                                                <div class="py-2">

                                                    <span class="d-block text-muted">Payment</span>
                                                <span><p><?php echo $row['paymode'] ?></p></span>
                                                    
                                                </div>
                                            </td>

                                            <td>
                                                <div class="py-2">

                                                    <span class="d-block text-muted">Shiping Address</span>
                                                <span><?php echo $Adderss ?></span>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>




                                
                            </div>




                                <div class="product border-bottom table-responsive">

                                    <table class="table table-borderless">

                                    <tbody>
                                        <tr>
                                            <td width="20%">
                                            
                                            <img src="shopNewAdmin/productImage/<?php echo $row['pimg'] ?>" width="90">

                                        </td>
                                    
                                        <td width="60%">
                                            <span class="font-weight-bold"><?php echo $row['pname']?></span>
                                            <div class="product-qty">
                                                <span class="d-block">Quantity:1</span>
                                                <!-- <span>Color:Dark</span> -->
                                                
                                            </div>
                                        </td>
                                        <td width="20%">
                                            <div class="text-right">
                                                <span class="font-weight-bold">&#8377;<?php echo $row['price'] ?></span>
                                            </div>
                                        </td>
                                        </tr>


                                    </tbody> 
                                        
                                    </table>
                                    


                                </div>



                                <div class="row d-flex justify-content-end">

                                    <div class="col-md-5">

                                        <table class="table table-borderless">

                                            <tbody class="totals">

                                                <tr>
                                                    <td>
                                                        <div class="text-left">

                                                            <span class="text-muted">Subtotal</span>
                                                            
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-right">
                                                            <span>&#8377;<?php echo $row['price'] ?></span>
                                                        </div>
                                                    </td>
                                                </tr>


                                                 <tr>
                                                    <td>
                                                        <div class="text-left">

                                                            <span class="text-muted">Shipping Fee</span>
                                                            
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-right">
                                                            <span>&#8377;<?php echo 40 ?></span>
                                                        </div>
                                                    </td>
                                                </tr>


                                                 <tr>
                                                    <td>
                                                        <div class="text-left">

                                                            <span class="text-muted">Tax Fee</span>
                                                            
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-right">
                                                            <span>0.00</span>
                                                        </div>
                                                    </td>
                                                </tr>


                                                 <tr>
                                                    <td>
                                                        <div class="text-left">

                                                            <span class="text-muted">Discount</span>
                                                            
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-right">
                                                            <span class="text-success">0.00</span>
                                                        </div>
                                                    </td>
                                                </tr>


                                                 <tr class="border-top border-bottom">
                                                    <td>
                                                        <div class="text-left">

                                                            <span class="font-weight-bold">Subtotal</span>
                                                            
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="text-right">
                                                            <span class="font-weight-bold">&#8377;<?php echo $row['amount'] ?></span>
                                                        </div>
                                                    </td>
                                                </tr>
                                                
                                            </tbody>
                                            
                                        </table>
                                        
                                    </div>
                                    


                                </div>


                                <p>We will be sending shipping confirmation email when the item shipped successfully!</p>
                                <p class="font-weight-bold mb-0">Thanks for shopping with us!</p>
                                <span>Shop-e team Team</span>



                            

                        </div>


                        <div class="d-flex justify-content-between footer p-3">

                            <span>Need Help? visit our <a href="#"> help center</a></span>
                             <a href="orderView.php">Track Order</span>
                            
                        </div>



            
        </div>
                
            </div>
            
        </div>
        
    </div>
</body>
</html>