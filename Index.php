<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SS Shoppings</title>
    <link rel="stylesheet" type="text/css" href="Main.css">
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ebebf6;
        }
        .welcome {
    padding: 5% 10%;
    color: #333; /* Neutral, elegant text color */
    text-align: center;
    font-size: 1.8rem;
    font-weight: bold;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2); /* Softer, modern shadow */
    border-radius: 15px;
    margin: 20px auto;
    width: 90%;
    max-width: 1200px;
    max-height: 300px;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    display: flex;
    flex-direction: row;
    background: linear-gradient(135deg,#FFA5E4, #e8f7ff); /* Gradient background */
    border: 1px solid #ddd; /* Light border for a clean look */
    overflow: hidden;
   
    
}

.welcome:hover {
    transform: scale(1.02);
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.3);
}

.welcome .name {
    padding: 20px;
    color: #2c3e50; /* Darker, professional text color */
}

.welcome .name h1 {
    font-size: 3rem;
    margin-bottom: 10px;
  
    font-family:Georgia, 'Times New Roman', Times, serif; /* Modern font */
    text-transform: uppercase;
}

.welcome .name p {
    margin: 10px 0;
    line-height: 1.6;
    color: #555;
   font-family: cursive;
}

.welcome .image img { 
    object-fit: cover;
    border-top: 1px solid #ddd;
    width: 200px; /* Separation line between text and image */
}

/* Responsive Adjustments */
@media (max-width: 400px) {
    .welcome {
        padding: 5%;
        font-size: 1.5rem;
    }
    .welcome .name h1 {
        font-size: 2.5rem;
    }
    .welcome .image img {
        max-height: 100px;
    }
}

/*service section*/

.services {
    text-align: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    max-height: 1500px;
    height: 50%;
    width: 90%;
    margin-left: auto;
    margin-right: auto;
}

.service-item {
    display: none; /* Initially hidden */
    border-radius: 12px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Softer shadow for depth */
    margin: 20px 0;
    width: 100%;
    height: 300px;
    position: relative;
    overflow: hidden; /* Ensures content does not exceed container */
    transition: transform 0.3s ease, opacity 0.3s ease;
}

.service-item.active {
    display: block; /* Visible for active service */
    transform: scale(1.02); /* Slight zoom for emphasis */
    opacity: 1;
}

.service-item .service1{
    width: 100%;
    height: 100%;
    background-image: url(Images/abck3.jpg);
    background-size: cover; /* Ensures image covers the entire block */
    background-position: center;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
}

.service-item .service2{
    width: 100%;
    height: 100%;
    background-image: url(Images/abck2.jpg);
    background-size: cover; /* Ensures image covers the entire block */
    background-position: center;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
}
.service-item .service3 {
    width: 100%;
    height: 100%;
    background-image: url(Images/abck4.jpg);
    background-size: cover; /* Ensures image covers the entire block */
    background-position: center;
    position: absolute;
    top: 0;
    left: 0;
    z-index: 1;
}

.service-item .service-content {
    position:fixed;
   top: 50%;
   left: 50%;
    transform: translate(-50%, -50%);
    z-index: 2;
    /* Semi-transparent overlay for text visibility */
    color: #fff;
    padding: 90px 100px;
    border-radius: 8px;
    text-align: center;
    max-width: 80%;
}

.service-item .service-content h2 {
    margin-right: 200px;
    font-size: 2rem;
    font-family:cursive;
    text-transform: uppercase;
    margin-left: auto;
}

.service-item .service-content p {
    font-size: 1rem;
    line-height: 1.6;
    margin-right: 200px;
    margin-left: auto;
}

/* Responsive Styling */
@media (max-width: 768px) {
    .services {
        flex-direction: column;
    }

    .service-item {
        height: 250px;
    }

    .service-item .service-content h2 {
        font-size: 1.5rem;
    }

    .service-item .service-content p {
        font-size: 0.9rem;
    }
}

    </style>
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

    <!-- Welcome Section -->
    <div class="welcome">
        <div class="name">
            <h1>Spring Collectoins</h1>
        <p>Best Products...Best Delivery...</p>
        <p>Welcome to our official webpage. We are always available to serve you.</p>
        </div>
        <div class="image">
            <img src="Images/vec.png">
        </div>
    </div>

   <!-- Services Section -->
   <div class="services" id="services">
    <div class="service-item active">
        <div class="service1"></div>
        <div class="service-content">
            <h2>Fast Delivery</h2>
            <p>Get your products delivered to you in no time with our efficient delivery services.</p>
        </div>
    </div>
    <div class="service-item">
        <div class="service2"></div>
        <div class="service-content">
            <h2>24/7 Customer Support</h2>
            <p>We are here to help you anytime with our round-the-clock support.</p>
        </div>
    </div>
    <div class="service-item">
        <div class="service3"></div>
        <div class="service-content">
            <h2>Quality Products</h2>
            <p>Only the best quality products for our valued customers.</p>
        </div>
    </div>
</div>

<footer class="footer">

    <div class="col">
        <h4>Contact</h4>
        <p><strong>Address :</strong> 582, Weligama Road, Negombo.</p>
        <p><strong>Phone : </strong>+94 452223547 / +94 716275254</p>
        <p><strong>Hours : </strong>10.00 - 18.00 , Mon - Sat</p>
        <div class="follow">
            <h4>Follow us</h4>
            <div class="icon">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-pinterest"></i>
                <i class="fab fa-youtube"></i>
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


    
    


    <script>
        // JavaScript to cycle through services one by one
        let currentService = 0;
        const services = document.querySelectorAll('.service-item');
        const serviceCount = services.length;

        function showNextService() {
            // Hide the current service
            services[currentService].classList.remove('active');
            
            // Move to the next service, looping back to the first if necessary
            currentService = (currentService + 1) % serviceCount;

            // Show the next service
            services[currentService].classList.add('active');
        }

        // Run the function every 3 seconds
        setInterval(showNextService, 3000);
    </script>

</body>
</html>
