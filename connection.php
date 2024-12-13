<?php
$con = mysqli_connect("localhost", "root", "");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
mysqli_query($con, "CREATE DATABASE IF NOT EXISTS `e-commerce`");


?>