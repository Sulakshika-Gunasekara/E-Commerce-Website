<?php
// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Debug: Check if we're receiving POST data
if (!empty($_POST)) {
    echo "<pre>Received POST data: ";
    print_r($_POST);
    echo "</pre>";
}

// Include database connection
include "connection.php";

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
    expiry_date VARCHAR(10) NOT NULL,
    cvv VARCHAR(3) NOT NULL,
    total_amount DECIMAL(10, 2) NOT NULL,
    order_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (!$con->query($sql)) {
    echo "Error creating table: " . $con->error;
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && 
    isset($_POST['fname']) && isset($_POST['lname'])) {
    
    // Check if all required fields are present
    $required_fields = ['fname', 'lname', 'adress', 'country', 'city', 'postal', 
                        'contact', 'email', 'nOnCard', 'cardNumber', 'expDate', 'cvv'];
    
    $missing_fields = [];
    foreach ($required_fields as $field) {
        if (!isset($_POST[$field]) || empty($_POST[$field])) {
            $missing_fields[] = $field;
        }
    }
    
    if (!empty($missing_fields)) {
        echo "Missing required fields: " . implode(', ', $missing_fields);
    } else {
        // Get form data
        $first_name = $con->real_escape_string($_POST['fname']);
        $last_name = $con->real_escape_string($_POST['lname']);
        $address = $con->real_escape_string($_POST['adress']);
        $country = $con->real_escape_string($_POST['country']);
        $city = $con->real_escape_string($_POST['city']);
        $postal_code = $con->real_escape_string($_POST['postal']);
        $contact = $con->real_escape_string($_POST['contact']);
        $email = $con->real_escape_string($_POST['email']);
        $card_name = $con->real_escape_string($_POST['nOnCard']);
        $card_number = $con->real_escape_string($_POST['cardNumber']);
        $expiry_date = $con->real_escape_string($_POST['expDate']);
        $cvv = $con->real_escape_string($_POST['cvv']);
        $total_amount = 110.00; // This should be calculated from the order
        
        // Insert data into database
        $sql = "INSERT INTO orders (
                first_name, last_name, address, country, city, postal_code, 
                contact, email, card_name, card_number, expiry_date, cvv, total_amount
            ) VALUES (
                '$first_name', '$last_name', '$address', '$country', '$city', '$postal_code', 
                '$contact', '$email', '$card_name', '$card_number', '$expiry_date', '$cvv', '$total_amount'
            )";
        
        if ($con->query($sql)) {
            echo "<script>alert('Order submitted successfully!');</script>";
            echo "<script>localStorage.clear();</script>";
            echo "<script>window.location.href = 'Product.html';</script>";
        } else {
            echo "Error: " . $con->error;
            echo "<script>alert('Order submission failed: " . addslashes($con->error) . "');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<!-- Your HTML content continues here -->