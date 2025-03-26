function validation() {
    let hasError = false;
    // Clear previous errors
    let existingErrors = document.querySelectorAll(".error");
    existingErrors.forEach(element => {
        element.remove();
    });
    
    //regular expressions for validation
    const numbers = /^[0-9]+$/;
    const emailPattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    
    const checkoutForm = document.getElementById("checkout-form");
    
    //check input fields
    let fName = checkoutForm.elements['fname'].value;
    if (fName == "") {
        hasError = true;
        let errorFname = document.createElement("div");
        errorFname.classList.add("error");
        errorFname.innerText = "First-Name Required";
        document.querySelector("#fname").after(errorFname);
    }
    
    let lName = checkoutForm.elements['lname'].value;
    if (lName == "") {
        hasError = true;
        let errorLname = document.createElement("div");
        errorLname.classList.add("error");
        errorLname.innerText = "Last-Name Required";
        document.querySelector("#lname").after(errorLname);
    }
    
    let address = checkoutForm.elements['adress'].value;
    if (address == "") {
        hasError = true;
        let errorAddress = document.createElement("div");
        errorAddress.classList.add("error");
        errorAddress.innerText = "Address Required";
        document.querySelector("#address").after(errorAddress);
    }
    
    let city = checkoutForm.elements['city'].value;
    if (city == "") {
        hasError = true;
        let errorCity = document.createElement("div");
        errorCity.classList.add("error");
        errorCity.innerText = "City Required";
        document.querySelector("#city").after(errorCity);
    }
    
    let postal = checkoutForm.elements['postal'].value;
    if (postal == "") {
        hasError = true;
        let errorPostal = document.createElement("div");
        errorPostal.classList.add("error");
        errorPostal.innerText = "Postal-Code Required";
        document.querySelector("#postal").after(errorPostal);
    } else if (!postal.match(numbers)) {
        hasError = true;
        let errorPostal = document.createElement("div");
        errorPostal.classList.add("error");
        errorPostal.innerText = "Numbers Only!";
        document.querySelector("#postal").after(errorPostal);
    }
    
    let contact = checkoutForm.elements['contact'].value;
    if (contact == "") {
        hasError = true;
        let errorContact = document.createElement("div");
        errorContact.classList.add("error");
        errorContact.innerText = "Contact Required";
        document.querySelector("#contact").after(errorContact);
    } else if (!contact.match(numbers)) {
        hasError = true;
        let errorContact = document.createElement("div");
        errorContact.classList.add("error");
        errorContact.innerText = "Numbers Only!";
        document.querySelector("#contact").after(errorContact);
    }
    
    let email = checkoutForm.elements['email'].value;
    if (email == "") {
        hasError = true;
        let errorEmail = document.createElement("div");
        errorEmail.classList.add("error");
        errorEmail.innerText = "Email Required";
        document.querySelector("#email").after(errorEmail);
    } else if (!email.match(emailPattern)) {
        hasError = true;
        let errorEmail = document.createElement("div");
        errorEmail.classList.add("error");
        errorEmail.innerText = "Invalid Email Format";
        document.querySelector("#email").after(errorEmail);
    }
    
    let cardName = checkoutForm.elements['nOnCard'].value;
    if (cardName == "") {
        hasError = true;
        let errorCardName = document.createElement("div");
        errorCardName.classList.add("error");
        errorCardName.innerText = "Card Name Required";
        document.querySelector("#nOnCard").after(errorCardName);
    }
    
    let cardNumber = checkoutForm.elements['cardNumber'].value;
    if (cardNumber == "") {
        hasError = true;
        let errorCardNumber = document.createElement("div");
        errorCardNumber.classList.add("error");
        errorCardNumber.innerText = "Card Number Required";
        document.querySelector("#cardNumber").after(errorCardNumber);
    } else if (!cardNumber.match(numbers)) {
        hasError = true;
        let errorCardNumber = document.createElement("div");
        errorCardNumber.classList.add("error");
        errorCardNumber.innerText = "Numbers Only!";
        document.querySelector("#cardNumber").after(errorCardNumber);
    } else if (cardNumber.length != 16) {
        hasError = true;
        let errorCardNumber = document.createElement("div");
        errorCardNumber.classList.add("error");
        errorCardNumber.innerText = "Card Number must be 16 digits!";
        document.querySelector("#cardNumber").after(errorCardNumber);
    }
    
    let expDate = checkoutForm.elements['expDate'].value;
    if (expDate == "") {
        hasError = true;
        let errorExpDate = document.createElement("div");
        errorExpDate.classList.add("error");
        errorExpDate.innerText = "Expiry Date Required";
        document.querySelector("#expDate").after(errorExpDate);
    }
    
    let cvv = checkoutForm.elements['cvv'].value;
    if (cvv == "") {
        hasError = true;
        let errorCvv = document.createElement("div");
        errorCvv.classList.add("error");
        errorCvv.innerText = "CVV Required";
        document.querySelector("#cvv").after(errorCvv);
    } else if (!cvv.match(numbers)) {
        hasError = true;
        let errorCvv = document.createElement("div");
        errorCvv.classList.add("error");
        errorCvv.innerText = "Numbers Only!";
        document.querySelector("#cvv").after(errorCvv);
    } else if (cvv.length != 3) {
        hasError = true;
        let errorCvv = document.createElement("div");
        errorCvv.classList.add("error");
        errorCvv.innerText = "CVV must be 3 digits!";
        document.querySelector("#cvv").after(errorCvv);
    }
    
    // If there are no errors, let the form submit normally
    return !hasError;
}

// Add event listener for Cancel button
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('Cancel-btn').addEventListener('click', function(e) {
        e.preventDefault();
        if (confirm('Are you sure you want to cancel this order?')) {
            window.location.href = 'Product.php';
        }
    });
});