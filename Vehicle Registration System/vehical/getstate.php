<html>
<head>
  
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>
<?php

$state = $_GET['q'];
$con=mysqli_connect("localhost","root","root","vehicle_reg_system");

if($state=='Maharashtra'){
  $sql='select * from c_maharashtra';
}
if($state=='Uttar Pradesh'){
  $sql='select * from c_up';
}
if($state=='Kerala'){
  $sql='select * from c_kerala';
}
if($state=='Gujrat'){
  $sql='select * from c_gujrat';
}
if($state=='All'){
  $sql='select * from customer';
}
// $sql="select * from event where event_id='".$game."'" ;

$result=mysqli_query($con,$sql);

// $n = $row['no_players'];

?>
<body>
<label>
<!-- <table class='table-striped table table-bordered table-hover table-condence'> -->
    <tr>
      <td>ID</td>
      <td>Name</td>
      <td>Aadhar no</td>
      <td>Contact no</td>
      <td>State</td>
      <td>City</td>
      <td>Pincode</td>
    </tr>
        <?php
     while($row = mysqli_fetch_assoc($result))//while look to fetch the result and store in a array $row.  
        {  
            // $id=$row[0];  
            // $name=$row[1];  
            // $aadhar_no=$row[2];
            // $Contact=$row[3];
            // $State=$row[4];
            // $City=$row[5];
            // $Pincode=$row[6]

            
        ?>  
               

                    <tr>
                        <td><?php echo $row['c_id'];  ?></td>
                        <td><?php echo $row['c_name'] ?></a></td>
                        <td><?php echo $row['aadhar_no']  ?></td>                        
                        <td><?php echo $row['contact_no']  ?></td>
                        <td><?php echo $row['state'];  ?></td>           
                        <td><?php echo $row['city']  ?></td>
                        <td><?php echo $row['pincode'];  ?></td>
 

                    </tr>
          
                
                <?php } ?>  

    </table>
  </label></body></html>