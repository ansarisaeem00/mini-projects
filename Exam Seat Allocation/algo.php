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

/*$sql= "SELECT blockno, benches, Timing FROM block";
$result= $conn->query($sql);

if ($result->num_rows >0)
{
	while($row=$result->fetch_assoc())
	{
		echo "blockno: ".
		$row["blockno"]." ".
		$row["benches"]." ".
		$row["Timing"]." ". "<br>";
	}
} else{
	echo "0 results";
}
$conn->close();*/

?>