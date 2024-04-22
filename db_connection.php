<?php
// Database configuration
$servername = "localhost"; // Change this to your database server name
$username = "jrzohtvm_dexterous"; // Change this to your database username
$password = "jrzohtvm_dexterous"; // Change this to your database password
$database = "jrzohtvm_dexterous"; // Change this to your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
