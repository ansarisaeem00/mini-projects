<?php

include("connect.php");

	$textareaValue = $_POST['status'];
	
	$sql = "INSERT INTO status (status) values ('$textareaValue')";
	$rs = mysqli_query($link, $sql);
	$affectedRows = mysqli_affected_rows($link);
	
	if($affectedRows == 1)
	{
		header("Location:social.php");
	}


?>