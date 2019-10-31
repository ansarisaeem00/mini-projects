<?php
    session_start();
    include("connect.php");

    // Pretty much kicks out a user once they revisit this page and is logged in
    
    $loggedIn = false;
    $email = $_POST["email"] ;
    $Pass = $_POST["pass"] ;

    if ($email && $Pass )
    {
        // User Entered fields
        $query = "SELECT email FROM user WHERE email = '$email' AND pass = '$Pass'";// AND password = $userPass";

        $result = mysqli_query( $link, $query);
        $row = mysqli_fetch_array($result);

        if(!$row){
            echo "<div>";
            echo "No existing user or wrong password.";
            echo "</div>";
        }
        else
            $loggedIn = true;
    }

    if ( !$loggedIn )
    {
        
    }
    else{
        header("Location:social.php");
        $_SESSION["email"] = $email;
    }

?>