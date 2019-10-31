<?php 
include ('connection.php');

if (isset($_POST['ins_cust'])) {

 
	$name=$_POST['cust_name'];
	$aadhar=$_POST['Aadhar_no'];
	$contact=$_POST['Contact'];
	$state=$_POST['state'];
	$city=$_POST['City'];
	$pincode=$_POST['Pincode'];
	$vehicle_id=$_POST['vehicle_id'];
  
  if($state=="")
  	$sql="insert into customer (c_name,aadhar_no,contact_no,state,city,pincode,vehicle_vehicle_id) values('$name','$aadhar','$contact','$state','$city','$pincode','$vehicle_id')";

  	
  	if(mysqli_query($conn,$sql)){
  		header('location:home_page.php');

  	}
  	else{
  		echo mysqli_error($conn);
  	}


}
?>