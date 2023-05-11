<?php
session_start();
require("connection.php");
$cid = $_SESSION['cid'];
$sql=mysqli_query($con,"SELECT oid,pname,price, amount,ostatus,pstatus,paymode,pimg,DIn from custorder,product where custorder.pid=product.pid and cid=$cid and OorC=0 ORDER BY oid DESC;");
$sum=0;

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <title>Document</title>
    <style>
    body {
        background-color: #eeeeee;
    }

    .footer-background {
        background-color: rgb(204, 199, 199);
    }

    @media(max-width:991px) {
        #heading {
            padding-left: 50px;
        }

        #prc {
            margin-left: 70px;
            padding-left: 110px;
        }

        #quantity {
            padding-left: 48px;
        }

        #produc {
            padding-left: 40px;
        }

        #total {
            padding-left: 54px;
        }
    }

    @media(max-width:767px) {
        .mobile {
            font-size: 10px;
        }

        h5 {
            font-size: 14px;
        }

        h6 {
            font-size: 9px;
        }

        #mobile-font {
            font-size: 11px;
        }

        #prc {
            font-weight: 700;
            margin-left: -45px;
            padding-left: 105px;
        }

        #quantity {
            font-weight: 700;
            padding-left: 6px;
        }

        #produc {
            font-weight: 700;
            padding-left: 0px;
        }

        #total {
            font-weight: 700;
            padding-left: 9px;
        }

        #image {
            width: 60px;
            height: 60px;
        }

        .col {
            width: 100%;
        }

        #zero-pad {
            padding: 2%;
            margin-left: 10px;
        }

        #footer-font {
            font-size: 12px;
        }

        #heading {
            padding-top: 15px;
        }
    }
    </style>
</head>

<body>
    <div class="container bg-white rounded-top mt-5" id="zero-pad">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10 col-12 pt-3">
                <div class="d-flex">
                    <div class="pt-1">
                        <h4>MY CART</h4>
                    </div>

                </div>
                <div class="d-flex flex-column pt-4">
                    <div>
                        <h5 class="text-uppercase font-weight-normal">shopping bag</h5>
                    </div>
                    <div class="font-weight-normal">2 items</div>
                </div>
                <div class="d-flex flex-row px-lg-5 mx-lg-5 mobile" id="heading">
                    <div class="px-lg-5 mr-lg-5" id="produc">PRODUCTS</div>
                    <div class="px-lg-5 ml-lg-5" id="prc">PRICE</div>
                    <div class="px-lg-5 ml-lg-1" id="quantity">QUANTITY</div>
                    <div class="px-lg-5 ml-lg-3" id="total">TOTAL</div>
                </div>
                <?php
                while($row=mysqli_fetch_assoc($sql)){
                    $sum+=$row['amount'];
?>


           <div
                    class="d-flex flex-row justify-content-between align-items-center pt-lg-4 pt-2 pb-3 border-bottom mobile">
                    <div class="d-flex flex-row align-items-center">
                        <div><img
                                src="shopNewAdmin/productImage/<?php echo $row['pimg'] ?>"
                                width="150" height="150" alt="" id="image"></div>
                        <div class="d-flex flex-column pl-md-3 pl-1">
                            <div>
                                <h6><?php echo $row['pname'] ?></h6>
                            </div>
                            <div>Art.No:<span class="pl-2">091091001</span></div>
                            <div>Color:<span class="pl-3">White</span></div>
                            <div>Size:<span class="pl-4"> M</span></div>
                        </div>
                    </div>
                    <div class="pl-md-0 pl-1"><b>&#8377;<?php echo $row['price']  ?></b></div>
                    <div class="pl-md-0 pl-2">
                        <span class="fa fa-minus-square text-secondary"></span><span class="px-md-3 px-1">1</span><span
                            class="fa fa-plus-square text-secondary"></span>
                    </div>
                    <div class="pl-md-0 pl-1"><b>&#8377;<?php echo $row['amount']  ?></b></div>
                    <a class="close" href="DeleteCartItem.php?oid=<?php echo $row["oid"] ?>">&times;</a>
                </div>



                <?php
                }
?>
            


            </div>
        </div>
    </div>
    <div class="container bg-light rounded-bottom py-4" id="zero-pad">
        <div class="row d-flex justify-content-center">
            <div class="col-lg-10 col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <form action="index.php">
                        <button class="btn btn-sm bg-light border border-dark">GO BACK</button>
                        </form>
                    </div>
                    <div class="px-md-0 px-1" id="footer-font">
                        <b class="pl-md-4">SUBTOTAL<span class="pl-md-4">&#8377;<?php echo $sum  ?></span></b>
                    </div>
                    <div>
                        <button class="btn btn-sm bg-dark text-white px-lg-5 px-3">CONTINUE</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>