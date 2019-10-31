<?php
    /* Attempt MySQL server connection. Assuming you are running MySQL
    server with default setting (user 'root' with no password) */
    include("connect.php");

    
    $name  = $_POST['name'];    
    $email  = $_POST['email'];
    $pass   = $_POST['pass'];
 
$email = mysqli_real_escape_string($link, $email);

$sql = "SELECT email FROM user WHERE email='$email'";
$result = mysqli_query($link,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 
if(mysqli_num_rows($result) == 1)
{
 echo "Sorry...This email already exist..";
}

else
{


     $query = mysqli_query($link , "INSERT INTO user (name,email, pass) VALUES ('$name','$email', '$pass')");
if($query)
{
 header("Location:social.php");
}

}
    // Close connection
    mysqli_close($link);
?>
