<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}
</style>
</head>
<body



<!---new entries--->

<p>New Registration:</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'insrt_cust')">Customer</button>
  <button class="tablinks" onclick="openCity(event, 'inst_dealer')">Dealer</button>
  <button class="tablinks" onclick="openCity(event, 'inst_vehicle')">Vehicle</button>
  <button class="tablinks" onclick="openCity(event, 'inst_registration')">registration</button>
  <button class="tablinks" onclick="openCity(event, 'inst_permit')">Permit</button>
</div>

<div id="insrt_cust" class="tabcontent">
  <?php include("inst_Customer.php");?>
</div>



<div id="inst_dealer" class="tabcontent">
<?php include("inst_dealer.php");?>  
</div>

<div id="inst_vehicle" class="tabcontent">
<?php include("inst_vehicle.php");?>
</div>



<div id="inst_registration" class="tabcontent">
<?php include("inst_registration.php");?>
</div>


<div id="inst_permit" class="tabcontent">
<?php include("inst_permit.php");?>
</div>

<br>
<br>
<!---View ALL entries-->
<p>View all Registration:</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'view_customer')">Customer</button>
  <button class="tablinks" onclick="openCity(event, 'view_dealer')">Dealer</button>
  <button class="tablinks" onclick="openCity(event, 'view_vehicle')">Vehicle</button>
  <button class="tablinks" onclick="openCity(event, 'view_registration')">Registration</button>
  <button class="tablinks" onclick="openCity(event, 'view_permit')">Permit</button>
</div>


<div id="view_customer" class="tabcontent">
  <?php include("view_c.php");?>
 </div>

<div id="view_dealer" class="tabcontent">
  <?php include("view_dealer.php");?>
</div>

<div id="view_vehicle" class="tabcontent">
<?php include("view_vehicle.php");?>
</div>

<div id="view_registration" class="tabcontent">
<?php include("view_registration.php");?>
</div>


<div id="view_permit" class="tabcontent">
<?php include("view_permit.php");?>
</div>

<script>
function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
</script>
     
</body>
</html> 
