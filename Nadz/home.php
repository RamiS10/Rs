<?php
include("handlers/config.php");


if(isset($_SESSION['userLoggedIn'])) {
	$userLoggedIn = $_SESSION['userLoggedIn'];
}else {
	header("Location: register.php");
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device.width, initial-scale=1.0">
    <title> Pharmaprix </title>
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
     <link rel="shortcut icon" href="images/iconlogo.png">
    <link rel="stylesheet" href="css/style.css">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
    <div class="header">
    <div class="container">
    <div class="navbar">
        <div class="logo">
            <img src="images/logo.png" width="125px">
        </div>
        <nav>
            <ul>
                 <li> <a href="home.php" >Home</a> </li>
                <li> <a href="products.php" >Products</a> </li>
                <li> <a href="about.php" >About</a> </li>
                <li> <a href="contactus.php" >Contact</a> </li>
                <li class="cart">
                <a href="cart.php" >
                    <ion-icon name="basket"></ion-icon>Cart<span>0</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
        
    <div class="row">
        <div class="col-2">
            <h1>Life is not merely to be alive,<br> but to be well.</h1>
            <p> It is health that is real wealth and not pieces of gold and silver. </p>
            <a href="#explore" class="btn">Explore Now &#9882;</a>
        </div>
        <div class="col-2">
            <img src="images/familypicture.jpg">
        </div>
        </div>
    </div>
    </div>
    <!-------- features categories --------> 
    <div class="categories">
        <div class="small-container">
        <div class="row">
            <div class="col-3">
                <img src="images/category1.jpg">
            </div>
            <div class="col-3">
                <img src="images/category2.jpg">
            </div>
            <div class="col-3">
                <img src="images/category3.jpeg">
            </div>
        </div>
      </div>
    </div>
    
    <!-------- features products --------> 
    
    
    <div class=small-container> 
        <h2 class="title"> Featured Products </h2>
        <p id="explore"></p>
        <div class="row">
        <div class="col-4">
            <img src="images/product1.jpg">
            <h4> N-95 Mask </h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p> 50,000 L.L </p>
            <a class="add-cart cart1" href="#">Add to Cart</a>
        </div>
            <div class="col-4">
            <img src="images/product2.jpg">
            <h4> My Sleeping Tea </h4>
            <div class = "rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p> 85,000 L.L </p>
            <a class="add-cart cart2" href="#">Add to Cart</a>
        </div>
            <div class="col-4">
            <img src="images/product3.jpg">
            <h4> Panadol Cold and Flu </h4>
            <div class = "rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p> 12,000 L.L </p>
            <a class="add-cart cart3" href="#">Add to Cart</a>
        </div>
            <div class="col-4">
            <img src="images/product4.jpg">
            <h4> Bioderma H20 </h4>
            <div class = "rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p> 99,000 L.L </p>
            <a class="add-cart cart4" href="#">Add to Cart</a>
        </div>
        </div>
    </div>
<script src="js/main.js"></script>
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
    <!-------- Offer -------->
    
    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="images/exclusive.png" class="offer-img">
                </div>
                <div class="col-2">
                    <p> Exclusive Available on Pharmaprix </p>
                    <h1> Sprayer Machine Disenfection Blue light Nano</h1>
                    <small> Milford sprayer handy sanitizer machine,High-Prefermance Electric Eco-Friendly Disinfection Sprayer - Portable Fogger Machine Disinfection Machine Fogger Disinfection for Indoor/Outdoor Hygiene with 6 months warranty</small>
                    
                    <a href="products.php" class="btn"> Buy Now &#9882;</a>
                    
                </div>
            </div>
        </div>
    </div>
    
     <!-------- Brands -------->
    
    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/logo1.png">
                </div>
                <div class="col-5">
                    <img src="images/logo2.jpeg">
                </div>
                <div class="col-5">
                    <img src="images/logo3.png">
                </div>
                <div class="col-5">
                    <img src="images/logo4.jpg">
                </div>
                <div class="col-5">
                    <img src="images/logo5.png">
                </div>
            </div>
        </div>
    </div>
    
    <!-------- footer -------->
    
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="foot-col-1">
                        <h3> Download Our App (Soon) </h3>
                        <p> Download App for Android and IOS mobile phone. </p>
                        <div class="app-logo">
                            <img src="images/appstore1.png">
                            <img src="images/appstore2.png">
                        </div>
                    </div>
                    <div class="foot-col-2">
                        <img src="images/logo.png" width="150px" >
                        <p> Our Purpose is to deliver the necessity of medice to your doorsteps </p>
                    </div>
                     <div class="foot-col-3">
                        <h3> Useful links </h3>
                         <ul> 
                            <li> Coupons </li>
                            <li> Blog Post </li>
                            <li> Return Policy </li>
                            <li> Join Affiliate </li>
                         </ul>
                    </div>
                    <div class="foot-col-4">
                        <h3> Follow us </h3>
                         <ul> 
                            <li> Facebook </li>
                            <li> Twitter </li>
                            <li> Instagram </li>
                            <li> TikTok </li>
                         </ul>
                    </div>
                </div>
                <hr>
                <p class="copyright"> Copyright 2020 - Rami Saleh , Khaled Chehab </p>
            </div>
    </div>

</body>
</html>