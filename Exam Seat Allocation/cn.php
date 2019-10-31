<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "allocation";

// Create connection
$conn = new mysqli("localhost", "root", "","allocation");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?> 