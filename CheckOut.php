

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="Main.css">
    <title>Checkout</title>
    <style>
        #main-container {
        display: flex;
        flex-direction: column;
        width: 100%;
        min-height: 120vh;
    
        box-shadow: rgb(38, 57, 77) 0px 20px 30px -10px;
        background-color: #dde1f0;
        background-image: linear-gradient(228deg, #e2e4ec 35%, #e6e3ec 48%, #ebd7ec 100%);

        }


        #details {
        display: inline-block;
        width: 80%;
        min-height: 120vh;
        padding-left: 10%;
        padding: 5%;
        }

        #form body{
            display: inline-block;
            flex-direction:row;
        
        }

        #summery {
            display: inline-block;
            width: 35%;
            min-height: 120vh;
            border-top-right-radius: 15px;
            border-bottom-right-radius: 15px;
        }

        #title {
            margin-left: 50px;
            font-weight: bolder;
        }

        .step {
            width: 85%;
            border-radius: 8px;
            height: 40px;
            background-color: rgba(255, 255, 255, 0.863);
            display: flex;
            margin-top: 30px;
            margin-left: 7%;
            align-items: center;
            column-gap: 15px;
            padding: 10px;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        }

        .step-icon {
            width: 30px;
            height: 30px;
            border-radius: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            background-color: black;
            color: white;
            font-weight: 800;
        }

        .st-text {
            font-size: larger;
            font-weight: 900;

        }

        form {
            margin-left: 7%;
        }

        .form-container {
            margin-top: 50px;
            width: 700px;
            display: flex;
            column-gap: 40px;
            row-gap: 40px;
            flex-wrap: wrap;
        }

        .inputs {
            display: block;
            margin-bottom: 5px;
        }

        .extend {
            width: 140px;
        }

        label {
            font-size: medium;
            font-weight: 600;
            width: 120px;
        }

        .text {
            height: 40px;
            width: 90%;
            border-radius: 10px;
            font-size: larger;
            font-weight: 600;
            border: none;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
            transition: border 0.4s, ease-out, 0.4s;
        }

        #address {
            width: 110%;
            margin-right: 20px;
        }

        .text:focus {
            outline: none !important;
            border: 1px solid blueviolet
        }

        #countries {
            margin-left: 30px;
        }

        option,
        select {
            height: 40px;
            width: 150%;
            border-radius: 10px;
            font-size: medium;
            font-weight: 600;
            border: none;
            outline: none;
        }

        .country-img {
            width: 40px;
            height: 35px;
        }

        #img-cont-select {
            display: flex;
            column-gap: 5px;
        }

        #bank-cards {
            display: flex;
            align-items: center;
            height: 30px;
            margin-top: 20px;
            margin-bottom: 5px;
            margin-left: 7%;
        }

        .bank-card {
            display: inline-block;
            width: 30px;
            height: 30px;
            margin-left: 1.5px;
            margin-right: 1.5px;
        }

        #accepted-text {
            font-weight: 600;
            margin-left: 10px;
        }

        #payment-details {
            padding-bottom: 20px;
            margin-bottom: 5px;
        }

        #nOnCard,
        #cardNumber,
        #email {
            width: 110%;
        }

        #order-summery {
            background-color: rgba(255, 255, 255, 0.863);
            width: 80%;
            min-height: 50vh;
            border-radius: 9px;
            margin-top: 93px;
            margin-left: 8%;
            box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;
        }

        .mini-caption {
            font-weight: 600;
            font-family: 'Roboto', 'Courier New', Courier, monospace;
            padding-top: 20px;
            margin-left: 20px;
        }

        hr {
            width: 85%;
            border: 1px solid rgba(199, 196, 196, 0.397);
            margin-top: 5px;
            margin-bottom: 10px;
        }

        .item-container {
            display: flex;
            align-items: center;
            margin-top: 20px;
            margin-left: 20px;
            margin-bottom: 10px;
            padding-bottom: 10px;
        }

        .item-container-image {
            height: 80px;
            width: 95px;
            border-radius: 7px;
        }

        .item-container-details {
            margin-left: 5px;
            height: 80px;
            width: 152px;
        }

        .container-detail-header {
            font-size: large;
            font-weight: 900;
            font-family: 'Roboto', 'Courier New', Courier, monospace;
            overflow: hidden;
            margin-bottom: 3px;
            display:inline-block;
        }

        .container-detail-attr {
            margin-bottom: 5px;
        }

        .attr-key {
            display: inline-block;
            font-size: small;
        }

        .attr-value {
            display: inline-block;
            font-size: small;
            font-weight: 900;
            font-family: 'Roboto', 'Courier New', Courier, monospace;
            padding-left: 3px;
        }

        .item-price {
            display: inline-block;
            font-size: large;
            font-weight: 800;
            font-family: 'Roboto', 'Courier New', Courier, monospace;
        }

        .num-of-items {
            display: inline-block;
            font-size: large;
            padding-left: 3px;
        }

        .costs {
            margin-left: 20px;
        }

        .delivery {
            display: inline-block;
            font-weight: 900;
        }

        .cost {
            display: inline-block;
            margin-left: 80px;
            margin-bottom: 20px;
        }

        .amount {
            display: inline-block;
            font-size: large;
            font-weight: bold;
        }

        #delivery-method {
            display: inline-block;
            font-weight: 300;
            font-size: 15px;
            margin-left: 4px;
        }

        #submit-form {
            margin-left: 7%;
            padding-top: 10px;
            padding-bottom: 10px;
            margin-bottom: 30px;
        }

        #sub-btn {
            width: 230px;
            height: 50px;
            background-color: black;
            border-radius: 7px;
            border: none;
            color: white;
            font-size: larger;
            font-weight: 700;
            transition: all ease 0.3s;
        }

        #sub-btn:hover {
            background-color: rgba(255, 255, 255, 0.205);
            color: black;
            border: 1px solid black;
            font-weight: bold;
        }

        #sub-btn:active {
            transform: translateY(2px);
        }

        #Cancel-btn {
            margin-left: 30px;
            width: 100px;
            height: 50px;
            background-color: rgba(255, 255, 255, 0);
            border-radius: 7px;
            border: none;
            color: black;
            font-size: larger;
            font-weight: bolder;
            font-family: 'Roboto', 'Courier New', Courier, monospace;
            transition: color 0.3s, ease, 0.3s;
        }

        #Cancel-btn:hover {
            color: rgba(235, 45, 45, 0.726);
        }

        #total {
            margin: 25px 0px 25px 20px;
            padding-bottom: 15px;
        }

        #total-label {
            display: inline-block;
            font-size: 25px;
            font-weight: 900;
        }

        #total-amount {
            display: inline-block;
            margin-left: 100px;
            font-family: 'Roboto', 'Courier New', Courier, monospace;
            font-size: 25px;
            font-weight: 900;
        }

        .error {
            color: red;
            font-weight: 600;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>

</head>

<body>
    <div id="main-container">

        <div class="nav">    
            <div class="navbar button"> <a href="Product.php"><button class="navbar button" type="button">PRODUCT</button></a> </div>   
           
            <a href="Product.html#cart" id="cart"><img src="shopping-cart.png" height="30" width="30"></a>    
        </div>

        <div id="form body">
            <div id="details">
                <h1 id="title">checkout</h1>
                <!-- Combined form for all sections -->
                <form id="checkout-form" action="Account.php" method="POST">
                    <div class="step">
                        <div class="step-icon">1</div>
                        <div class="st-text">Billing Details</div>
                    </div>
                    <div class="form-container">
                        <div>
                            <label for="fname" class="inputs">First Name<sup>*</sup></label>
                            <input type="text" name="fname" id="fname" class="inputs text" required>
                        </div>
                        <div>
                            <label for="lname" class="inputs">Last Name<sup>*</sup></label>
                            <input type="text" name="lname" id="lname" class="inputs text" required>
                        </div>
                        <div>
                            <label for="address" class="inputs">Address<sup>*</sup></label>
                            <input type="text" name="adress" id="address" class="inputs text" required>
                        </div>
                        <div id="countries">
                            <label for="country" class="inputs">Country<sup>*</sup></label>
                            <div id="img-cont-select">
                                <div>
                                    <img class="country-img" src="../images/student-one/checkout/srilanka.png" alt="sl">
                                </div>
                                <select name="country" id="country" class="inputs">
                                    <option value="SL">Sri Lanka</option>
                                    <option value="IN">India</option>
                                    <option value="JP">Japan</option>
                                    <option value="UK">United Kingdom</option>
                                    <option value="US">United states</option>
                                </select>
                            </div>
                        </div>
                        <div>
                            <label for="city" class="inputs">City<sup>*</sup></label>
                            <input type="text" name="city" id="city" class="inputs text" required>
                        </div>
                        <div>
                            <label for="postal" class="inputs">Postal Code<sup>*</sup></label>
                            <input type="text" name="postal" id="postal" class="inputs text" required>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-icon">2</div>
                        <div class="st-text">Contact Details</div>
                    </div>
                    <div class="form-container">
                        <div>
                            <label for="contact" class="inputs">Contact<sup>*</sup></label>
                            <input type="text" name="contact" id="contact" class="inputs text" required>
                        </div>
                        <div>
                            <label for="email" class="inputs">Email Address</label>
                            <input type="email" name="email" id="email" class="inputs text" required>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-icon">3</div>
                        <div class="st-text">Payment Method</div>
                    </div>
                    <div id="bank-cards">
                        <img class="bank-card " src="../images/student-one/checkout/visa.png" alt="card">
                        <img class="bank-card" src="../images/student-one/checkout/mastercard.png" alt="card">
                        <img class="bank-card" src="../images/student-one/checkout/amex.png" alt="card">
                        <img class="bank-card" src="../images/student-one/checkout/paypal.png" alt="card">
                        <div id="accepted-text">Accepted</div>
                    </div>
                    <div class="form-container">
                        <div>
                            <label for="nOnCard" class="inputs extend">Name on Card<sup>*</sup></label>
                            <input type="text" name="nOnCard" id="nOnCard" class="inputs text" required>
                        </div>
                        <div>
                            <label for="cardNumber" class="inputs extend">Card Number<sup>*</sup></label>
                            <input type="text" name="cardNumber" id="cardNumber" class="inputs text" required>
                        </div>
                        <div>
                            <label for="expDate" class="inputs extend">Expire Date<sup>*</sup></label>
                            <input type="month" name="expDate" id="expDate" class="inputs text" required>
                        </div>
                        <div>
                            <label for="cvv" class="inputs">CVV<sup>*</sup></label>
                            <input type="text" name="cvv" id="cvv" class="inputs text" required>
                        </div>
                    </div>

                    <div id="submit-form">
                        <button id="sub-btn" type="submit" onclick="return validation()">Pay Now!</button>
                        <button id="Cancel-btn" type="button">Cancel</button>
                    </div>
                </form>
            </div>
            <div id="summery">
                <div id="order-summery">
                    <h3 class="mini-caption">Your Order</h3>
                    <hr id="margin">
                    <div class="costs">
                        <div class="delivery">Delivery</div>
                        <div class="cost">
                            <div class="amount">$10</div>
                            <div id="delivery-method">
                                Express
                            </div>
                        </div>
                    </div>
                    <div class="costs">
                        <div class="delivery">Discount</div>
                        <div class="cost">
                            <div class="amount">-$10</div>
                        </div>
                    </div>
                    <hr>
                    <div id="total">
                        <div id="total-label">Total</div>
                        <div id="total-amount">$110.00</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="Checkout.js"></script>
</body>
</html>