<?php
	include("connection.php");

?>



<!DOCTYPE html>
<html>
<head>
	<title>Registration's Detail</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
	<table class="table-striped table table-bordered table-hover table-condence">
		<tr>
			<td>Registration ID</td>
			<td>Customer ID</td>
			<td>Customer Vehicle ID</td>
			<td>Dealer ID</td>
		</tr>
		


		<?php  
        $view_reg_query="select * from registration" ;//select query for viewing users.  
        $run=mysqli_query($conn,$view_reg_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $r_id=$row[0];  
            $c_id=$row[1];  
            $c_v_id=$row[2];
            $d_id=$row[3];

            
        ?>  
                <tbody>

                    <tr>
                        <td><?php echo $r_id;  ?></td>
                        <td><?php echo $c_id;  ?></a></td>                        
						<td><?php echo $c_v_id;  ?></td>
    					<td><?php echo $d_id;  ?></td>
 

 	                  </tr>
				    </div>

                </tbody>
                <?php } ?>  





	</table>
</body>
</html>