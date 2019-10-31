<?php
	include("connection.php");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Vehicle's Detail</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>
<body>
	<table class="table-striped table table-bordered table-hover table-condence">
		<tr>
			<td>Vehicle Id</td>
			<td>Vehicle Type</td>
			<td>Model No</td>
			<td>Chasis No</td>
			<td>Engine NO</td>
			<td>Manufacture Year</td>
		</tr>



		<?php  
        $view_veh_query="select * from vehicle" ;//select query for viewing users.  
        $run=mysqli_query($conn,$view_veh_query);//here run the sql query.  
  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $id=$row[0];  
            $v_type=$row[1];  
            $model_no=$row[2];
            $chasis_no=$row[3];
            $engine_no=$row[4];
            $mfg=$row[5];

            
        ?>  
                <tbody>

                    <tr>
                        <td><?php echo $id;  ?></td>
                        <td><?php echo $v_type;  ?></a></td>                        
						<td><?php echo $model_no;  ?></td>
    					<td><?php echo $chasis_no;  ?></td>						
    					<td><?php echo $engine_no;  ?></td>
 						<td><?php echo $mfg;  ?></td>
 

 	                  </tr>
				    </div>

                </tbody>
                <?php } ?>  



		
	</table>
</body>
</html>