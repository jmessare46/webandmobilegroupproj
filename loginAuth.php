<?php
/**
 * Created by PhpStorm.
 * User: Joseph Messare
 * Date: 4/8/18
 * Time: 9:47 PM
 */


session_start();

$username = $_POST['uname'];
$password = $_POST['psw'];

// If login is clicked
if (isset( $_POST['submit'] ))
{
    // If neither username or password is empty
    if(empty( $username ) || empty( $password ))
    {
        echo "Username or Password error";
    }
    else
    {
        // Checks if password and user are correct
        if( $username == "joe" && $password == "test" )
        {
            // User and password combo was correct and user is sent to members page
            header("location: member.php");
            $_SESSION['user'] = "joe";
        }
        else
        {
            // Redirect to login page
            header("location: login.php");
        }
    }
}
else
{
    // Something went really wrong
    echo "Page submission error";
}
    ?>