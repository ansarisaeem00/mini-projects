<?php 


?>

<!DOCTYPE html>
<html>
<head>
	<title>Customer's Detail</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

</head>

<body>
	<div>
<form>
<select onclick="showUser(this.value)">
	<option>Maharashtra</option>
	<option>Uttar Pradesh</option>
	<option>Gujrat</option>
	<option>Kerala</option>
	<option>All</option>
</select>
</form>
<table class='table-striped table table-bordered table-hover table-condence' id="tabdiv"></table>
<!-- <div id='tabdiv'></div><br> -->
</div>	
</body>
<script>
function showUser(str) {
  if (str=="") {
    document.getElementById("tabdiv").innerHTML="";
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
      document.getElementById("tabdiv").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","getstate.php?q="+str,true);
  xmlhttp.send();
}
</script>
</html>