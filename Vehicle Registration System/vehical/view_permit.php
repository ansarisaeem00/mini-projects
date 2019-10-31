<?php
	include("connection.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Permit's Detail</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
	<table class="table-striped table table-bordered table-hover table-condence">
		<tr>
			<td>Permit ID</td>
			<td>Customer ID</td>
			<td>Customer Name</td>
			<td>Vehicle ID</td>
			<td>Permit Type</td>
			<td>Start Date</td>
			<td>Renewal Date</td>
		</tr>



			<?php  
        $view_permit_query="select * from permit inner join customer where permit.customer_c_id=customer.c_id" ;//select query for viewing users.  
        $run=mysqli_query($conn,$view_permit_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $id=$row[0];  
            $p_type=$row[1];  
            $start_date=$row[2];
            $renewal_date=$row[3];
            $cust_id=$row[4];
            $cust_veh_id=$row[5];
            $cust_name=$row[7];
            
        ?>  
                <tbody>

                    <tr>
                        <td><?php echo $id;  ?></td>
                        <td><?php echo $cust_id;  ?></a></td>                        
						<td><?php echo $cust_name;  ?></td>
    					<td><?php echo $cust_veh_id;  ?></td>						
    					<td><?php echo $p_type;  ?></td>
 						<td><?php echo $start_date;  ?></td>
 						<td><?php echo $renewal_date;  ?></td>

 	                  </tr>
				    </div>

                </tbody>
                <?php } ?>  




		
	</table>
</body>
</html>