<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact US Page</title>
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
     <link rel="shortcut icon" href="images/iconlogo.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body class="contactbody">
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

        <div class="contact-form">
            <h1>Contact Us</h1>
            <div class="regen">
              <label>Full Name :</label>
              <input type="text"  placeholder="Enter Your Name">
            </div>
        
            <div class="regen">
              <label>Email :</label>
              <input type="email"  placeholder="Enter Your Email">
            </div>
        
            <div class="regen">
              <label>Phone Number :</label>
              <input type="text"  placeholder="Enter Your Phone Number">
            </div>
        
            <div class="regen">
              <label>Message :</label>
              <textarea></textarea>
            </div>
            <a href ="mailto:khaled.chehab01@lau.edu.lb"class="btn2">Send</a>
          </div>
          <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>
          <script src="js/main.js"></script>
    
</body>
</html>