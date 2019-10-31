<?php
include "stylee.css";
require "connect.php";

$bn=$_POST["blockno"];
// $dept=$_POST["department"];
$benches=$_POST["benches"];
$time=$_POST["time"];
// $Subject=$_POST["Subject"];
$b1=$_POST["b1"];
$n1=$_POST["n1"];
$s1=$_POST["s1"];

 
$b2=$_POST["b2"];
$n2=$_POST["n2"];
$s2=$_POST["s2"];

$start_s1=$_POST["sr1"];
$start_s2=$_POST["sr2"];

$in1=$_POST["in1"];
$in2=$_POST["in2"];








echo $b1."<br>"; 
echo $b2."<br>";


echo $n1."<br>";
echo $n2."<br>";

echo $s1."<br>";
echo $s2."<br>";

echo $start_s1."<br>";
echo $start_s2."<br>";


echo $bn."<br>"; 

// $seatno=$_POST["seatno"];






$sql1 = "INSERT INTO room (room_no,no_of_bench,tm) VALUES ('$bn','$benches','$time')";

$sql2 = "INSERT INTO student (branch1,branch2,sem1,sem2,no_of_s1,no_of_s2,start_s1,start_s2,room_no) VALUES ('$b1','$b2','$s1','$s2','$n1','$n2','$start_s1','$start_s2','$bn')";


             if(mysqli_query($conn,$sql2))
                {
                 echo "<script>alert('Succesfully inserted');</script>";
                }
            else
                 {
                    echo "<script>alert('FAILED TO INSERT in student table');</script>";
                 }


             if(mysqli_query($conn,$sql1))
                {
                 echo "<script>alert('Succesfully inserted in room table');</script>";
                }
            else
                 {
                    echo "<script>alert('FAILED TO INSERT in student table');</script>";
                 }
   
   mysqli_close($conn);