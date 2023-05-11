<?php
require("connection.php");
session_start();
$rowcount =0;
if(isset($_SESSION['cid'])){
  $cid=  $_SESSION['cid'];
    $sql=mysqli_query($con,"SELECT cid FROM custorder where Oorc = 0 and cid =$cid ");
    $rowcount = mysqli_num_rows( $sql );
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop-e</title>
    <!-- stylesheet -->
    <link rel="stylesheet" href="css/style.css">

    <!-- light-slider-css -->
    <link rel="stylesheet" type="text/css" href="css/lightslider.css">

    <!-- jQuery ------------->
    <script src="js/Jquery.js"></script>
    <!-- CSS only -->

    <!-- light-slider-js --------------->
    <script src="js/lightslider.js"></script>

    <!-- CSS only -->

    <!-- fav-icon -->
    <link rel="shortcut icon" href="images/fav-icon.png">
    <!-- Font Awesome Link -->
    <script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
    <style>
        /* Dropdown Button */
        .dropbtn {
            display: inline-block;
  border: 1px solid gray;
  border-radius: 4px;
  padding: 10px 30px 10px 20px;
  background-color: #ffffff;
  cursor: pointer;
  white-space: nowrap;

           
        }
        .dropbtn:after {
        content: '';
  position: absolute;
  top: 50%;
  right: 15px;
  transform: translateY(-50%);
  width: 0; 
  height: 0; 
  border-left: 5px solid transparent;
  border-right: 5px solid transparent;
  border-top: 5px solid black;

        }

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        /* Change color of dropdown links on hover */
        .dropdown-content a:hover {
            background-color: #ddd
        }

        /* Show the dropdown menu (use JS to add this class to the .dropdown-content container when the user clicks on the dropdown button) */
        .show {
            display: block;
        }
    </style>
</head>

<body>
    <!-- navigation bar -->
    <nav>


        <!-- menue bar -->
        <div class="navigation">





            <!-- logo -->
            <a href="#" class="logo">
                <img src="images/logo6.png" alt="">
            </a>

            <!-- menue-icon---------------------------------------------- -->
            <div class="toggle"></div>




            <!-- menue -->
            <ul class="menue">
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Men</a>
                    <span class="sale-lable">Sale</span>
                </li>
                <li><a href="#">Women</a></li>
                <li><a href="#">Kids</a></li>

            </ul>

            <div class="dropdown">
                <button onclick="myFunction()" class="dropbtn">More</button>
                <div id="myDropdown" class="dropdown-content">
                  
                    <?php
                    if (!isset($_SESSION['cid'])) {
                    ?>
                          <a href="#" class="user">your order</a>

                    <?php
                    } else {
                    ?>
                    <a href="orderView.php">your order</a>
                      
                    <?php
                    }
                    ?>
                    <?php
                    if (!isset($_SESSION['cid'])) {
                    ?>
                        <a href="#" class="user">sell with shop-e</a>

                    <?php
                    } else {
                    ?>
                        <a href="req_shop.php">sell with shop-e</a>
                    <?php
                    }
                    ?>
                    <a href="logout.php">log out</a>
                   


                </div>
            </div>

            <!-- right menue -->
            <div class="right-menue">
                <!-- Shop -->

                <span class="sale-lable">Sale</span>
                </li>
                </a>
                <!-- search -->
                <a href="#" class="search">
                    <i class="fas fa-search"></i>
                </a>
                <!-- user -->
                <?php
                if (!isset($_SESSION['cid'])) {
                ?>


                    <a href="#" class="user">
                        <i class="far fa-user"></i>
                    </a>


                <?php
                }
                // echo $_SESSION['cid'];
                ?>
                <!-- cart-icon -->
                <a href="cart.php">
                    <i class="fas fa-shopping-cart">
                        <!-- number of products in cart -->
                        <span class="num-cart-product"><?php echo $rowcount ?></span>
                    </i>
                </a>
            </div>
        </div>

    </nav>

    <!-- search bar -->
    <div class="search-bar">
        <!-- search input -->
        <div class="search-input">
            <!-- input -->
            <input type="text" placeholder="Search For Product">
            <!-- cancel-btn -->
            <a href="#" class="search-cancel">
                <i class="fas fa-times"></i>
            </a>
        </div>
    </div>

    <!-- login and signup form -->
    <div class="form">
        <!-- login -->
        <div class="login-form">
            <!-- cancel-btn -->
            <a href="#" class="form-cancel">
                <i class="fas fa-times"></i>
            </a>


            <!-- heading -->
            <strong>Log In</strong>
            <!-- inputs -->
            <form method="post" action="login.php">

                <input type="email" placeholder="Example@gmail.com" name="email" required>


                <input type="password" placeholder="Enter Password" name="password" required>
                <!-- submit button -->
                <input type="submit" value="Log In">
            </form>

            <!-- forget and sign up btn -->
            <div class="form-btns">
                <a href="#" class="forget">Forget Your Password?</a>
                <a href="#" class="sign-up-btn">Create Account</a>
            </div>

        </div>



        <!-- Sign-Up -->
        <div class="sign-up-form">
            <!-- cancel-btn -->
            <a href="#" class="form-cancel">
                <i class="fas fa-times"></i>
            </a>


            <!-- heading -->
            <strong>Sign Up</strong>
            <!-- inputs -->
            <form method="post" action="res.php">
                <!-- <input type="text" placeholder="Full Name" name="fullname" required> -->
                <input type="email" placeholder="Example@gmail.com" name="email" required>
                <input type="text" placeholder="OTP " name="otp">
                <input type="password" placeholder="Enter Password" name="password" required>
                <!-- submit button -->
                <input type="submit" value="Sign Up">
            </form>

            <!-- forget and sign up btn -->
            <div class="form-btns">
                <a href="#" class="already-account">Already Have an Account?</a>

            </div>

        </div>






    </div>
    <!-- JavaScript Bundle with Popper -->
    <script>
        /* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

   
    </script>
</body>

</html>