<?php 
require("connection.php");
include('header.php');
$pid = $_GET['pid'];
$_SESSION['pid']=$pid;
$cid = $_SESSION['cid'];
$sql=mysqli_query($con,"SELECT * FROM product where pid = $pid  ");
$status=  mysqli_fetch_assoc(mysqli_query($con,"SELECT * FROM custorder where pid = $pid and OorC=0 and cid=$cid" )) == null ? 0: 1;
$row=mysqli_fetch_assoc($sql);
if($sql){

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins&family=Roboto:wght@100;400;500&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styleProduct.css">
    <title>Document</title>
</head>
<body>

<div class="container">
        <div class="img" >
            <div class="main"> 
                <img src="shopNewAdmin/productImage/<?php echo $row['pimg'] ?>" alt="product">
            </div>
            <div class="view">
                <div class="view1">
                    <img src="shopNewAdmin/productImage/<?php echo $row['pimg'] ?>" alt="">
                </div>
                <div class="view1 ">
                    <img src="shopNewAdmin/productImage/<?php echo $row['pimg2'] ?>" alt="">
                </div>
                <div class="view1">
                    <img src="shopNewAdmin/productImage/<?php echo $row['pimg3'] ?>" alt="">
                </div>
              
            </div>
        
        </div>
        <div class="info">
         <div class="productTitle"><h2>
         <?php echo $row['pname'] ?></h2></div>
         <div class="color">
             <label class="shortLabel" for="color">color</label>
             <select name="" id="">
                 <option value="">1</option>
                 <option value="">2</option>
             </select>
         </div>
         <div class="price"><h2><?php echo 'RS '.$row['price'] ?></h2></div>
       
         <div class="qntBtn">    
             
            <div class="forFlex">   
         <div class="qnt"><a href = "addresspage.html"><button>BUY NOW</button></a></div>
         <?php 
         if($status==0){
             
?>
<div class="addToCart"><a href = "cartConfirm.php"><button>ADD TO CART</button></a></div>

<?php
         }else{
?>
 <div class="addToCart"><a href = "cart.php"><button>GO TO CART</button></a></div>

            <?php
         }
         
         ?>
        
        </div>  
        </div>
         <div class="description"><?php echo $row['pdetails'] ?></div>
         <div class="KeyPoint">
             <ul>
                 <li class="li1">Lorem ipsum dolor sit amet  </li>
                 <li class="li2">Lorem ipsum dolor sit amet consectetur  </li>
                 <li class="li3">Lorem ipsum dolor sit amet consectetur </li>
             </ul>
             
         </div>
         <div class="share">
           <div class="share1">1<span>whatsapp</span></div>
           <div class="share2">2<span>whatsapp</span></div>
           <div class="share3">3<span>whatsapp</span></div>
           <div class="share4">4<span>whatsapp</span></div>
         </div>
        </div>
    </div>
    
	  <div class="arrival-heading">
            <strong>Related Products</strong>
            <p>Lorem ipsum dolor sit amet, consectetur</p>
        </div>
        <!-- product container -->
        <div class="product-container">
            <!-- product-box-1 -->
            <div class="product-box">


                <!-- immg -->
                <div class="product-img">
                    <!-- add cart ------------>
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>


                    <img src="images/p-1.png" alt="">
                </div>



                <!-- details -->
                <div class="product-details">
                    <a href="#" class="p-name">Drawstring T-Shirts</a>
                    <span class="p-price">$22.00</span>
                </div>
            </div>


            <!-- product-box-2 -->
            <div class="product-box">


                <!-- immg -->
                <div class="product-img">
                    <!-- add cart ------------>
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>


                    <img src="images/p-2.png" alt="">
                </div>



                <!-- details -->
                <div class="product-details">
                    <a href="#" class="p-name">Drawstring T-Shirts</a>
                    <span class="p-price">$22.00</span>
                </div>
            </div>




            <!-- product-box-3 -->
            <div class="product-box">


                <!-- immg -->
                <div class="product-img">
                    <!-- add cart ------------>
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>


                    <img src="images/p-3.png" alt="">
                </div>



                <!-- details -->
                <div class="product-details">
                    <a href="#" class="p-name">Drawstring T-Shirts</a>
                    <span class="p-price">$22.00</span>
                </div>
            </div>




            <!-- product-box-4 -->
            <div class="product-box">


                <!-- immg -->
                <div class="product-img">
                    <!-- add cart ------------>
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>


                    <img src="images/p-4.png" alt="">
                </div>



                <!-- details -->
                <div class="product-details">
                    <a href="#" class="p-name">Drawstring T-Shirts</a>
                    <span class="p-price">$22.00</span>
                </div>
            </div>





            <!-- product-box-5 -->
            <div class="product-box">


                <!-- immg -->
                <div class="product-img">
                    <!-- add cart ------------>
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>


                    <img src="images/p-5.png" alt="">
                </div>



                <!-- details -->
                <div class="product-details">
                    <a href="#" class="p-name">Drawstring T-Shirts</a>
                    <span class="p-price">$22.00</span>
                </div>
            </div>



            <!-- product-box-6 -->
            <div class="product-box">


                <!-- immg -->
                <div class="product-img">
                    <!-- add cart ------------>
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>


                    <img src="images/p-6.png" alt="">
                </div>



                <!-- details -->
                <div class="product-details">
                    <a href="#" class="p-name">Drawstring T-Shirts</a>
                    <span class="p-price">$22.00</span>
                </div>
            </div>




            <!-- product-box-7 -->
            <div class="product-box">


                <!-- immg -->
                <div class="product-img">
                    <!-- add cart ------------>
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>


                    <img src="images/p-7.png" alt="">
                </div>



                <!-- details -->
                <div class="product-details">
                    <a href="#" class="p-name">Drawstring T-Shirts</a>
                    <span class="p-price">$22.00</span>
                </div>
            </div>




            <!-- product-box-8 -->
            <div class="product-box">


                <!-- immg -->
                <div class="product-img">
                    <!-- add cart ------------>
                    <a href="#" class="add-cart">
                        <i class="fas fa-shopping-cart"></i>
                    </a>


                    <img src="images/p-8.png" alt="">
                </div>



                <!-- details -->
                <div class="product-details">
                    <a href="#" class="p-name">Drawstring T-Shirts</a>
                    <span class="p-price">$22.00</span>
                </div>
            </div>





        </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
   
 
    <script src="js/scriptProduct.js"></script>
    <?php 
    include('script.php') 
    ?>
    
<?php

}
?>
</body>
</html>














