<!DOCTYPE html>
<html>
<head>
	<title>Select Data</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>
		<form action="seat_arrangement.php" method="post" class="form-group">
			
			<label>Enter Room NO:</label>
			<input type="text" name="room_no">
			<br>

			<label>Select Time</label>
			<SELECT name="time">
				<option value="9">9</option>
				<option value="11">11</option>
				<option value="1">1</option>
				<option value="3">3</option>
			</SELECT>	

			<br>

			<input type="Submit" name="seat" class="btn">
				
		</form>
</body>
</html>