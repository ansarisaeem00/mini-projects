<?php
	include("connection.php");

?>



<!DOCTYPE html>
<html>
<head>
	<title>Dealer's Detail</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
	<table class="table-striped table table-bordered table-hover table-condence">
		<tr>
			<td>ID</td>
			<td>Name</td>
			<td>Contact no</td>
			<td>State</td>
			<td>City</td>
			<td>Pincode</td>
		</tr>



		<?php  
        $view_deal_query="select * from dealer where state='Assam'" ;//select query for viewing users.  
        $run=mysqli_query($conn,$view_deal_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $id=$row[0];  
            $name=$row[1];  
            $Contact=$row[5];
            $State=$row[2];
            $City=$row[3];
            $Pincode=$row[4]

            
        ?>  
                <tbody>

                    <tr>
                        <td><?php echo $id;  ?></td>
                        <td><?php echo $name;  ?></a></td>                        
						<td><?php echo $Contact;  ?></td>
    					<td><?php echo $State;  ?></td>						
    					<td><?php echo $City;  ?></td>
 						<td><?php echo $Pincode;  ?></td>
 

 	                  </tr>
				    </div>

                </tbody>
                <?php } ?>  



		
	</table>
</body>
</html>