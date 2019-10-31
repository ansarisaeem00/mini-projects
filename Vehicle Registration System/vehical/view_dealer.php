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
    <form>
    <select onclick="showUser(this.value)">
        <option>Maharashtra</option>
        <option>Uttar Pradesh</option>
        <option>Gujrat</option>
        <option>Assam</option>
        <option>Madhya Pradesh</option>
        <option>Kashmir</option>
        <option>All</option>
    </select>
</form>
	<table class="table-striped table table-bordered table-hover table-condence" id="dtabdiv">
        

        </table>
		


		
	
</body>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("dtabdiv").innerHTML="";
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
      document.getElementById("dtabdiv").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","get_dealers.php?q="+str,true);
  xmlhttp.send();
}
</script>
</html>