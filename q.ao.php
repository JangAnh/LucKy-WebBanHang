<!DOCTYPE html>
<html lang="en">
<?php
include("connection/connect.php");  
error_reporting(0);  
session_start(); 

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">   
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Home</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/animsition.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> 
    <link href="css/slideshow.css" rel="stylesheet"> 
    <script src="http://code.jquery.com/jquery-3.1.0.min.js"></script>
    <link href="css/slideshow.css" rel="stylesheet"> 
    <link href="ani.css" rel="stylesheet"> 
    <link href="ani1.css" rel="stylesheet"> 

</head>

<body class="home">
    
    <header id="header" class="header-scroll top-header headrom">
        <nav class="navbar navbar-dark">
            <div class="container">
                <button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#mainNavbarCollapse">&#9776;</button>
                <a class="navbar-brand" href="index.php"> <img class="img-rounded logo" src="images/inc1.png" style="width: 203px; height: 48px;" alt=""> </a>
                <div class="collapse navbar-toggleable-md  float-lg-right" id="mainNavbarCollapse">
                    <ul class="nav navbar-nav">
                        <li class="nav-item"> <a class="nav-link active" href="index.php"> Home <span class="sr-only">(current)</span></a> </li>
                        <li class="nav-item"> <a class="nav-link active" href="restaurants.php">Restaurants <span class="sr-only"></span></a> </li>
                        
                       
                        <?php
                    if(empty($_SESSION["user_id"])) // if user is not login
                        {
                            echo '<li class="nav-item"><a href="login.php" class="nav-link active">Login</a> </li>
                          <li class="nav-item"><a href="registration.php" class="nav-link active">Register</a> </li>';
                        }
                    else
                        {

                                
                                echo  '<li class="nav-item"><a href="your_orders.php" class="nav-link active">My Orders</a> </li>';
                                echo  '<li class="nav-item"><a href="logout.php" class="nav-link active">Logout</a> </li>';
                        }

                    ?>
                         
                    </ul>
                     
                </div>
            </div>
        </nav>

    </header>
<section class="container">
    <div class="container">
  <div class="ghost">
    <div class="eyes"></div>
    <div class="eyes"></div>
    <div class="mouth"></div>
    <div class="gooey left">
      <div class="out"></div>
    </div>
    <div class="gooey mleft">
      <div class="out"></div>
    </div>
    <div class="gooey mright">
      <div class="out"></div>
    </div>
    <div class="gooey right">
      <div class="out"></div>
    </div>
    <div class="gooey last">
      <div class="out"></div>
    </div>
  </div>
  <div class="shadow"></div>
</div>
</section>

<div style="display: flex; justify-content: center; align-items: center;">
    <img src="images/q.cao.png" style="width: auto; height: auto;" alt="Image Description">
</div>
    <footer class="footer">
        <div class="container">
            
      
            <div class="bottom-footer">
                <div class="row">
                    <div class="col-xs-12 col-sm-3 payment-options color-gray">
                        <h5 style="color: green;">Payment Options</h5>
                        <ul>
                            <li>
                                <a href="#"> <img src="images/tienmat.png" alt="CashonDelivery" style="height: 64.2px; width: 72.9px;"> </a>
                            </li>
                            <li>
                                <a href="#"> <img src="images/zalopay.png" alt="ZaloPay" style="height: 64.2px; width: 72.9px;"> </a>
                            </li>
                            <li>
                                <a href="#"> <img src="images/momo.png" alt="MoMo" style="height: 64.2px; width: 72.9px;"> </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-4 address color-gray">
                                <h5 style="color: green;">Address</h5>
                                <p style="color: black;">3F Nguyen Huu Tho, Tan Hung, District 7, Ho Chi Minh</p>
                                <h5 style="color: green;">Phone: 75696969855</a></h5> </div>
                            <div class="col-xs-12 col-sm-5 additional-info color-gray">
                                <h5 style="color: green;">Addition informations</h5>
                               <p style="color: black;">Join thousands of other restaurants who benefit from having partnered with us.</p>
                            </div>
                </div>
            </div>
      
        </div>
    </footer>



<script src="js/jquery.min.js"></script>
<script src="js/tether.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/animsition.min.js"></script>
<script src="js/bootstrap-slider.min.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/headroom.js"></script>
<script src="js/foodpicky.min.js"></script>
<script src="js/slideshow.js"></script>

</body>

</html>