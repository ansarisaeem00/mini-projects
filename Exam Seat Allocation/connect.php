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

?>
<!--if(!@mysql_connect($host,$user,$pass)||!@mysql_select_db($db))
	echo "successful";
die($conn_error);



?-->