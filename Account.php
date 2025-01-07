<?php
include "connection.php";
// Select database
mysqli_select_db($con, "e-commerce");


// Create table if not exists
$sql = "CREATE TABLE IF NOT EXISTS orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    first_name VARCHAR(255) NOT NULL,
    last_name VARCHAR(255) NOT NULL,
    address TEXT NOT NULL,
    country VARCHAR(100) NOT NULL,
    city VARCHAR(100) NOT NULL,
    postal_code VARCHAR(50) NOT NULL,
    contact VARCHAR(50) NOT NULL,
    email VARCHAR(255) NOT NULL,
    card_name VARCHAR(255) NOT NULL,
    card_number VARCHAR(16) NOT NULL,
    expiry_date DATE NOT NULL,
    cvv VARCHAR(3) NOT NULL,
    total_amount DECIMAL(10, 2) NOT NULL,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully\n";
} else {
    echo "Error creating table: " . $conn->error;
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $conn->real_escape_string($_POST['fname']);
    $last_name = $conn->real_escape_string($_POST['lname']);
    $address = $conn->real_escape_string($_POST['adress']);
    $country = $conn->real_escape_string($_POST['country']);
    $city = $conn->real_escape_string($_POST['city']);
    $postal_code = $conn->real_escape_string($_POST['postal']);
    $contact = $conn->real_escape_string($_POST['contact']);
    $email = $conn->real_escape_string($_POST['email']);
    $card_name = $conn->real_escape_string($_POST['nOnCard']);
    $card_number = $conn->real_escape_string($_POST['cardNumber']);
    $expiry_date = $conn->real_escape_string($_POST['expDate']);
    $cvv = $conn->real_escape_string($_POST['cvv']);
    $total_amount = 110.00; // Adjust this value dynamically if needed

    $sql = "INSERT INTO orders (first_name, last_name, address, country, city, postal_code, contact, email, card_name, card_number, expiry_date, cvv, total_amount)
            VALUES ('$first_name', '$last_name', '$address', '$country', '$city', '$postal_code', '$contact', '$email', '$card_name', '$card_number', '$expiry_date', '$cvv', '$total_amount')";

    if ($conn->query($sql) === TRUE) {
        echo "Order submitted successfully!";
    } else {
        echo "Error: " . $conn->error;
    }
}

$conn->close();
?>
