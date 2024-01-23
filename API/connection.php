<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "data_repository";

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Set UTF-8 character set
$conn->set_charset("utf8");
?>
