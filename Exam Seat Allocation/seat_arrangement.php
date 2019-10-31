<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
</head>
<body>

		
<?php
	$time_select=$_POST["time"];
	$room_no_select=$_POST["room_no"];

	include("connect.php");
        $seat="SELECT * from student inner join room where room.room_no='$room_no_select' AND room.tm='$time_select' AND room.room_no=student.room_no";
        $run=mysqli_query($conn,$seat);//here run the sql query.  
        while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
        {  
            $b1=$row[0];  
            $b2=$row[1];  
            $s1=$row[2];
            $s2=$row[3];
            $n1=$row[4];
            $n2=$row[5];
            $start_s1=$row[6];
            $start_s2=$row[7];
            $bn=$row[8];
            $bench=$row[10];
            $time=$row[11];
         } ?>

         <?php  

         		$split1 = str_split($start_s1, 2);
         		$split2 = str_split($start_s2, 2);

				   $i=0;
         		$n=ceil(($s1+$s2)/2);
               $count=0;
               ?>

               <table class="table table-striped">
                  <tr>
                        <th>LINE-1</th>
                        <th>LINE-2</th>
                        <th>LINE-3</th>
                        <th>LINE-4</th>        
                     </tr>
                  
               </table>
                     <?php
         		while ($i<$n)
                {
         			 if ($count==$bench) {
         			 	break;
         			 }
         		?>
         		<div class="conitainer">
         			<table class="table table-striped">
         				
                     <tr>  
         					<td><?php echo $split1[0].$split1[1].($split1[2]+$i);?></td>		
         					<td><?php echo $split2[0].$split2[1].($split2[2]+$i+6);?></td>
         					<td><?php echo $split1[0].$split1[1].($split1[2]+$i+12);?></td>		
         					<td><?php echo $split2[0].$split2[1].($split2[2]+$i+18);?></td>
         					
         				</tr>
         				<tr>
         					<td><?php echo $split2[0].$split2[1].($split2[2]+$i);?></td>
         					<td><?php echo $split1[0].$split1[1].($split1[2]+$i+6); ?></td>
         					<td><?php echo $split2[0].$split2[1].($split2[2]+$i+12);?></td>
         					<td><?php echo $split1[0].$split1[1].($split1[2]+$i+18); ?></td>
         				</tr>
         			</table>
         			
         		</div>

         		<?php	
               $count=$count + (($s1+$s2)/4);
               $i++;
         		}

         ?>


</body>
</html>