<?php
	include("connection.php");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Customer's Detail</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
    <form>
    <select onchange="showUser(this.value)">
        <option>Maharashtra</option>
        <option>Uttar Pradesh</option>
        <option>Gujrat</option>
        <option>Kerala</option>
        <option>All</option>
    </select>
</form>
	<div id='tabdiv'>
	<!-- <table class='table-striped table table-bordered table-hover table-condence'>
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Aadhar no</td>
			<td>Contact no</td>
			<td>State</td>
			<td>City</td>
			<td>Pincode</td>
		</tr> -->
	
		
		 <!-- <?php  
        $view_cust_query="select * from customer" ;//select query for viewing users.  
        $run=mysqli_query($conn,$view_cust_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $id=$row[0];  
            $name=$row[1];  
            $aadhar_no=$row[2];
            $Contact=$row[3];
            $State=$row[4];
            $City=$row[5];
            $Pincode=$row[6]

            
        ?>  
                <tbody>

                    <tr>
                        <td><?php echo $id;  ?></td>
                        <td><?php echo $name;  ?></a></td>
                        <td><?php echo $aadhar_no;  ?></td>                        
						<td><?php echo $Contact;  ?></td>
    					<td><?php echo $State;  ?></td>						
    					<td><?php echo $City;  ?></td>
 						<td><?php echo $Pincode;  ?></td>
 

 	                  </tr>
				    </div>

                </tbody>
                <?php } ?> -->  



	</table>

</div><br>
</body>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("tabdiv").innerHTML="";
    return;
  }
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("tabdiv").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getstate.php?q="+str,true);
  xmlhttp.send();
}
</script>
</html>