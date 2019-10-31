<?php
session_start();

 $name=$_SESSION["logname"];
 $_SESSION["logname"]=$name;

include("db.php"); 
$sql= "SELECT name,exam,branch,held_in,regis_no  FROM student WHERE seat_no='$name'";
$sql1= "SELECT internal,external,practical,term_work  FROM marks WHERE seat_no='$name'";
$result=mysqli_query($conn,$sql) or die(mysqli_connect_error());
$result1=mysqli_query($conn,$sql) or die(mysqli_connect_error());
$result2=mysqli_query($conn,$sql) or die(mysqli_connect_error());
$result3=mysqli_query($conn,$sql) or die(mysqli_connect_error());
$result4=mysqli_query($conn,$sql) or die(mysqli_connect_error());

$result5=mysqli_query($conn,$sql1) or die(mysqli_connect_error());
mysqli_close($conn);

?>









<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/HeaderSsc.dwt" codeOutsideHTMLIsLocked="false" --><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="Pragma" content="no-cache">
<meta http-equiv="refresh">
<meta http-equiv="expires" content="-1">
<!-- InstanceBeginEditable name="doctitle" -->
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" --><title>Marksheet</title>
<!-- InstanceEndEditable -->
<link href="mahSscresult13.asp_files/style.css" rel="stylesheet" type="text/css">
<style>
  
#rcorners2 {
    border-radius: 20px;
    border: 6px solid #ad6026;
    padding: 10px; 
    width: 200px;
    height: 150px;    
}
</style>
</head>
<body>
<table id="rcorners2" align="center" border="8" bordercolor="#ad6026" cellpadding="0" cellspacing="0" width="700">
<tbody><tr><td>
<table cellpadding="0" cellspacing="0" width="650">
<tbody><tr align="left">
          <td bgcolor="#FFFFFF" width="42"><span class="TAB"><a href="http://mahresult.nic.in/default.htm"> 
            <input name="Print2" value="Print" onclick="javascript:window.print();return false" class="dontprintme" type="button">
            </a></span></td></tr>
            <tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
 <img src="aiktc.jpg" width="150"></td>
<td><img src="uom.png" width="80%">
			  <h3 align="center">
              ANJUMAN ISLAM'S  <br>
              KALSEKAR TECHNICAL CAMPUS, NEW PANVEL<br>
              SCHOOL OF ENGINEERING &amp; TCHNOLOGY
            </h3>
            <p align="center">Approved by All India Council for Technical Education (A.I.C.T.E.),<br>
            Recognized by Directorate of Technical Education (D.T.E.), Government of Maharashtra &amp; Affiliated to University of Mumbai.</p>
          </td></tr>
</tbody></table>

<!-- InstanceBeginEditable name="EditRegion3" -->

     <center>
   <hr width="95%" color="#ad6026">
    <h2><font color="#ad6026">GRADE CARD</font></h2>
   <p align="left">&nbsp;&nbsp;&nbsp;
NAME         &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : <?php while ($row=mysqli_fetch_row($result))
    {
    printf ("%s",$row[0]);}?><br>&nbsp;&nbsp;&nbsp;
EXAMINATION  &nbsp;&nbsp; : <?php while ($row=mysqli_fetch_row($result1))
    {
    printf ("%s",$row[1]);}?><br>&nbsp;&nbsp;&nbsp;
BRANCH      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  : <?php while ($row=mysqli_fetch_row($result2))
    {
    printf ("%s",$row[2]);}?><BR>&nbsp;&nbsp;&nbsp;
HELD IN     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  : <?php while ($row=mysqli_fetch_row($result3))
    {
    printf ("%s",$row[3]);}?><BR>&nbsp;&nbsp;&nbsp;
SEAT NUMBER &nbsp;&nbsp;&nbsp;  :<?php  echo "$name";?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;REGISTRATION N0.&nbsp;&nbsp;:<?php while ($row=mysqli_fetch_row($result4))
    {
    printf ("%s",$row[4]);}?>
</p>
      <table align="center" border="1" cellpadding="2px" cellspacing="1" width="95%">
        <tbody>
        <tr>
          <td rowspan="2">COURSE CODE</td>
          <td rowspan="2">COURSE TITLE</td>
          <td rowspan="2">COURSE CREDIT</td>
          <td colspan="3" align="center">GRADE</td>
          <td rowspan="2">CREDIT EARNED</td>      
          <td rowspan="2">GRADE POINTS</td>     
          <td rowspan="2">CxGP</td>
        </tr>
        <tr>
  <td>ESE/PR/OR</td>
  <td>IA/TW</td>
  <td>OVERALL </td>
        </tr>
		

       <tr class="usertext2"> 
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><br></td>
        </tr>
		    
        <tr class="usertext2">
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><br></td>
        </tr>
        <tr class="usertext2">
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><br></td>
        </tr>
        <tr class="usertext2">
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><br></td>
        </tr>
        
        <tr class="usertext2">
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><br></td>
        </tr>
        
        <tr class="usertext2">
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td><br></td>
        </tr>
        <tr> 
          <td></td>
          <td></td>
          <td>Total</td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
          <td></td>
        </tr>
        
     
      </tbody>
      </table>
      <table width="95%">
        <tbody><tr> 
          <td><br>
            REMARK : &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SGPI:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CGPI:<br><br>
            RESULT DECLARED ON: <br><br><br><br><br><br>
            PREPARED BY:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VERIFIED BY:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CHECKED BY:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EXAMCELL INCHARGE:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PRINCIPAL:</td>
        </tr>
      </tbody></table>
      
    </center>
<!-- InstanceEndEditable --> <br>
<table align="center" border="0" width="700">
  <tbody><tr class="usertext1">
          <td class="centerText" background="mahSscresult13.asp_files/back2.jpg" height="62">
            F-Head of Failure, --Not Applicable, Ab-Absent, / Female, SGPI= , ~-Dyslexia Benefit
          </td>
</tr>
</tbody></table>
</td>
</tr></tbody></table>


</body><!-- InstanceEnd --></html>