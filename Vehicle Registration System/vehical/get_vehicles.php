<html>
<head>
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<?php
$type = $_GET['q'];
$con=mysqli_connect("localhost","root","","vehicle_reg_system");
if($type=='Two Wheeler'){
  $sql='select * from two_wheeler_vehicles';
}
if($type=='Four Wheeler'){
  $sql='select * from four_wheeler_vehicles';
}
if($type=='All'){
  $sql='select * from vehicle';
}
$result=mysqli_query($con,$sql);
?>
<body>
<label>
  <tr>
			<td>Vehicle Id</td>
			<td>Vehicle Type</td>
			<td>Model No</td>
			<td>Chasis No</td>
			<td>Engine NO</td>
			<td>Manufacture Year</td>
		</tr>
        <?php
     while($row = mysqli_fetch_assoc($result))//while look to fetch the result and store in a array $row.  
        {            
        ?>     
					<tr>
            <td><?php echo $row['vehicle_id'];  ?></td>
            <td><?php echo $row['v_type'];  ?></a></td>                        
						<td><?php echo $row['model_name'];  ?></td>
    				<td><?php echo $row['chassis_no'];  ?></td>						
    				<td><?php echo $row['engine_no'];  ?></td>
 						<td><?php echo $row['manufac_yr'];  ?></td>
          </tr>               
                <?php } ?>  
    </table>
  </label>
</body>
</html>