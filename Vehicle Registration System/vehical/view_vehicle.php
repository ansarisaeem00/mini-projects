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
    <form method="POST">
    <select onclick="showUser(this.value)">
        <option>Two Wheeler</option>
        <option>Four Wheeler</option>
        <option>All</option>
        
    </select>
</form>
	<table class="table-striped table table-bordered table-hover table-condence" id="vtabdiv">
	
    </table>
</body>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("vtabdiv").innerHTML="";
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
      document.getElementById("vtabdiv").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","get_vehicles.php?q="+str,true);
  xmlhttp.send();
}
</script>
</html>