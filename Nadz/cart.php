<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device.width, initial-scale=1.0">
    <title> Cart - Pharmaprix </title>
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css//styleCart.css" type="text/css">
     <link rel="shortcut icon" href="images/iconlogo.png">
    
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>
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
                    <ion-icon name="basket"></ion-icon>Cart <span>0</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    </div>
     <!-------- cart item details -------->
   <div class="container-products">
        <div class="product-header">
            <h5 class="product-title">PRODUCT</h5>
            <h5 class="price sm-hide">PRICE</h5>
            <h5 class="quantity">QUANTITY</h5>
            <h5 class="total">TOTAL</h5>
        </div>
        <div class="products">

        </div>
    </div>

    
    
    
<script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
 <script src="js/main.js"></script>
    
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