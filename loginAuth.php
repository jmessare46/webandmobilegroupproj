<?php
/**
 * Created by PhpStorm.
 * User: Joseph Messare
 * Date: 4/8/18
 * Time: 9:47 PM
 */

// If login is clicked
if (isset( $_POST['submit'] ))
{
    $path = './';
    require $path . 'assets/inc/dbInfo.inc';
    $db = new mysqli("localhost","jwm2957", "necknews","jwm2957");

    $uname = $_POST['uname'];
    $pass = $_POST['psw'];

    $queryString = "SELECT * FROM members WHERE uname = '$uname'";

    $result = $db->query($queryString);
    if ($result)
    {
        // Gets results from database
        $user = $result->fetch_assoc();

        // Checks to make sure username and password match the database record
        if($user['uname'] == $uname && $user['pass'] == $pass)
        {
            session_start();
            $_SESSION['uname'] = $user;
            $_SESSION['pass'] = $pass;

            // Sends authenticated user to members page
            header( "Location: member.php" );
        }
        else
        {
            // Redirects to login page
            header( "Location: login.php" );
        }
    }
    else
    {
        // Redirects to login page
        header( "Location: login.php" );
    }
}
else
{
    // Redirects to login page
    header( "Location: login.php" );
}
?>
