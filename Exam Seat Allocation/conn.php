<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "allocation";

// Create connection
$conn = mysqli_connect("localhost", "root", "", "allocation");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else
{
    echo "connected successfully";
}

?>