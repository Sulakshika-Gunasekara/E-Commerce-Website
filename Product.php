
<!DOCTYPE php>
<php lang="en">

<head>
    <meta charset="UTF-8">
    <title>Buy Products</title>
    <link rel="logoicon" type="image/jpeg" href="../images/logo.jpeg">
    <link rel="stylesheet" href="../styles/navigation.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    <link rel="stylesheet" href="Main.css">
    <link rel="stylesheet" href="product.css">
</head>

<body>

    <div class="nav">
        <img src="Images/logo.png" width="70" height="70">
        <div class="navbar">
            <a href="Index.php"><button type="button">HOME</button></a>
            <a href="Product.php"><button type="button">PRODUCT</button></a>
            <a href="ContactUs.php"><button type="button">CONTACT US</button></a>
        </div>
    </div>
   
    

    <div id="main">
        <div class="main-overlay-inactive">
            <div class="container">
                <div class="header">
                    <h3 class="heading">Shopping Cart</h3>
                    <h5 class="action">Remove all</h5>
                </div>
                <hr>
                <div class="checkout-details">
                    <div class="total">
                        <div>
                            <div class="subtotal">SubTotal</div>
                            <div class="items">0 Items</div>
                        </div>
                        <div class="total-amont">$ 0</div>
                    </div>
                    <div class="checkout-btn">
                        <span><button id="close" class="btn">Close</button></span>
                        <span><a  href="CheckOut.php"><button id="proceed" class="btn">Checkout</button></a></span>
                    </div>
                </div>
            </div>
        </div>
        <div id="catogories">
            <div id="buttons">
                <div id="catogory-list">
                   
                   
                    
                        <button class="catogory"> Ladies Wear </button>
                        <button class="catogory"> Mens Wear</button> </button>
                        <button class="catogory"> Shoes </button>
                        <button class="catogory"> Hair Bands</button>
                        
                  
       
                    <a href="#" id="cart"><img src="Images/shopping-cart.png" height="30" width="30"></a>
                    <a href="CheckOut.php"><img src="Images/user.png" height="30" width="30"></a>
                </div>
                
            </div>
        </div>
        <div id="items">
        </div>
       
    </div>

    
    <script src="script.js"></script>

    <footer class="footer">

        <div class="col">
            <h4>Contact</h4>
            <p><strong>Address :</strong> 582, Weligama Road, Negombo.</p>
            <p><strong>Phone : </strong>+94 452223547 / +94 716275254</p>
            <p><strong>Hours : </strong>10.00 - 18.00 , Mon - Sat</p>
            <div class="follow">
                <h4>Follow us</h4>
                <div class="icon">
                    <i class="fas fa-facebook-f"></i>
                    <i class="fas fa-twitter"></i>
                    <i class="fas fa-instagram"></i>
                    <i class="fas fa-pinterest"></i>
                    <i class="fas fa-youtube"></i>
                </div>
            </div>
    
        </div>
    
        <div class="col">
            <h4>About</h4>
            <a href="#">About Us</a>
            <a href="#">Delivery Information</a>
            <a href="#">Privacy Pollicy</a>
            <a href="#">Terms & Conditions</a>
            <a href="#">Contact Us</a>
        </div>
    
        <div class="col">
            <h4>My Account</h4>
            <a href="#">Sign In</a>
            <a href="#">View Cart</a>
            <a href="#">My Wishlist</a>
            <a href="#">Track My Order</a>
            <a href="#">Help</a>
        </div>
    
        <div class="col">
            <h4>Install App</h4>
            <p>From App Store or Google Play</p>
            <p>Secured Payment Gateways</p>
    
        </div>
        <div class="copyright">
            <p> &copy; 2024 Sulakshika Gunasekara</p>
        </div>
    </footer>

</body>

</php>