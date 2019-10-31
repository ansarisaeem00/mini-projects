<?php
  include("links.php");
  include("menu.php");
  include 'connect.php';

?>

<!DOCTYPE html>
<head>
  <title>Front page</title>
 
  <style>    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #555;
      color: white;
      padding: 15px;
    }
  </style>
</head>
<body>


  
<div class="container text-center">   
  <div id="mainArea"> 
  <div class="row">
   
    <div class="col-sm-7">
    
      <div class="row">
        <div class="col-sm-12">
          <div class="panel panel-default text-left">
            <div class="panel-body">

              <a href="#" id="link">
                 <span class="btn btn-lg btn-danger glyphicon glyphicon-pencil"></span>
              </a>

               <a href="upload_image.php" id="link">
                  <span class="glyphicon glyphicon-camera btn-danger btn-lg"></span>
                  
                </a>

             <br>
             <br>
             <p>Write Something to upload</p>
             <form action="upload_status.php" method="POST">
              <textarea rows="4" cols="50" name="status"></textarea>

              <input type="submit" name="upload" value="Click here to upload your status">
              </form>


            </div>
          </div>
        </div>
      </div>
      

      <div class="row">
        <div class="col-sm-3">
          <div class="well">
           <p> <?php
           $result = mysqli_query($link,"SELECT * FROM status");

                while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['status'] . "</td>";
echo "</tr>";
}
           ?></p>
         
</div>




<footer class="container-fluid text-center">
  



</footer>




-->





</div>
</body>
</html>
