<?php

// Provide access to the database using the connection script file
include "cc_db_connection.php";

// Set cookie name
$cookie_name = "member_login";

//Login Form Button
if(isset($_POST['login']))
{
    $mEmail = $_POST['email'];
    $mPass = $_POST['password'];

    $logqry = "SELECT email, password, givenName
                FROM member_details WHERE 
                email = '$mEmail' AND 
                password = '$mPass'";

    $qrydata = mysqli_query($conn, $logqry);

    $count = mysqli_num_rows($qrydata);

    if($count == 1)
    {   
        $member = mysqli_fetch_assoc($qrydata);

        // Set cookie value (from db)
        $cookie_value = $member['givenName'];

        setcookie($cookie_name, $cookie_value, time() + 86400, '/');

        // Redirect to Home page
        header('location:community_centre_home.php');
    }
    else 
    {
        //Redirect to login page with message???? 404 page?
        header('location:community_centre_whoops.php');        
    }

}

// Logout Form Button, Cookie kill
if(isset($_POST['logout']))
{
    $msg = "Please login to see more details";

    setcookie($cookie_name,"",time() - 360, '/');
    header("location:community_centre_login.php?Message=".$msg);
    //    header('location:community_centre_login.php?Message={$msg}');


}

?>