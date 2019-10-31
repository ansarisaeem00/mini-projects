<?php
	include("connect.php");
?>

<!DOCTYPE html>
<html>
<head><!--header files are added here-->
<title>Room Detail:: Seating Arragement</title>
<meta charset="uft=8"/>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Champion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<!--/header files are added here-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="main1.css" rel="stylesheet" type="text/css" media="all" />
<style>
.con{
	padding-top:8px;
	padding-left:100px;
	padding-right:150px;
	
	padding-bottom:1000px;
	height:550px;
    background-image:url(images/brown.png);
	background-position:center;
	background-repeat:repeat-y;
	
	width:100%;
	height:700px;
	color:white;

	background-attachment:scroll;
	
}

</style>
</head>
</html>

<body>

	<div class="header">
		<div class="container">
			<div class="header-nav">
				<nav class="navbar navbar-default">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					  </button>
						<div class="logo">
							<a class="navbar-brand" href="index.html">Seating Arrangement <span></span></a>
						</div>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
					 <ul class="nav navbar-nav">
					 
					<li class="hvr-sweep-to-bottom"><a href="roomdetail.html">Room Arrangement</a></li>
						<li class="hvr-sweep-to-bottom"><a href="update.html" class="scroll">Update Room</a></li>
						<li class="hvr-sweep-to-bottom"><a href="view.html" class="scroll">View Room</a></li>
						<li class="hvr-sweep-to-bottom"><a href="logout.php" class="scroll">Logout</a></li>
				</ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>
		</div>
	</div>
	<div class="con">


<!--Forms-->
	
   <div class="loginscene"><div class="page-header">
        <h1>Room Detail</h1>
		<h2>Exam Seating Arrangement</h2>
      </div>
		<p class="grid1">
		 </p>
		
    <div class="bs-example" data-example-id="simple-horizontal-form">
    <form class="form-horizontal" action="RD.php" method="POST">
      <div class="form-group">

        <label for="inputEmail3" class="col-sm-2 control-label">Enter Room Number</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="blockno" placeholder="room number">
        </div>
      </div>

      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Enter  No. Of Benches</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="benches" placeholder="number of benches">
        </div>
      </div>
      </div>
      <div class="bs-example" data-example-id="simple-form-inline">
	  <div class="form-group">
	  

        <label for="inputEmail3" class="col-sm-4 control-label">Branch</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="b1" placeholder="branch">
          </div>
		
        <label for="inputEmail3" class="col-sm-4 control-label">Semester</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="s1" placeholder="Semester">
          </div>


      </div>
	  <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">No. Of Students</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="n1" placeholder="no. of student">
        </div>
		
      </div>
	  <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">Starting Roll No.</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="sr1" placeholder="starting roll no.">
        </div>
		
      </div>
       </div>
	  <div class="bs-example" data-example-id="simple-form-inline">
	  <div class="form-group">
	  

        <label for="inputEmail3" class="col-sm-4 control-label">Branch</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="b2" placeholder="branch">
          </div>

		
        <label for="inputEmail3" class="col-sm-4 control-label">Semester</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="s2" placeholder="Semester">
          </div>		
      </div>

      <br>
      <br>
	  <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">No. Of Students</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="n2" placeholder="no. of student">
        </div>
		
      </div>
       <div class="form-group">
        <label for="inputEmail3" class="col-sm-4 control-label">Starting Roll No.</label>
        <div class="col-sm-2">
          <input type="text" class="form-control" name="sr2" placeholder="starting roll no.">
        </div>
		
      </div>
      </div>
      <div class="bs-example" data-example-id="simple-horizontal-form">
<!--<form class="form-horizontal">-->
      
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Invigilator 1</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="in1" placeholder="invigilator">
        </div>
      </div>
	  
	 <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Invigilator 2</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="in2" placeholder="invigilator">
        </div>
      </div>
	 </div>
	 <div class="form-group"> 	
	 <label for="inputEmail3" class="col-sm-2 control-label">Timing</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="time" placeholder="00:00 AM">
        </div>
	 </div>
	 
      <div class="form-group">
        
		<div class="col-sm-offset-2 col-sm-10">
         <!--<input type="submit" value="SIGN UP"/><br> -->
		 <br><!--button type="submit" class="btn btn-default btn-info">Submit</button>
        </div-->
   
    
  </div>
  
        
      <!--button href="RD.php" type="button" class="btn btn-lg btn-success">Submit</button-->
      
	  <input type="submit" href="RD.php" value="SUBMIT"/><br>       
	   </form>
      

</div>
</div></div>


</body>

