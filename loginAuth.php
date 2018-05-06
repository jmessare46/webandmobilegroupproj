<?php
/**
 * Created by PhpStorm.
 * User: Joseph Messare
 * Date: 4/8/18
 * Time: 9:47 PM
 */

session_start();
$path = './';
require $path . 'assets/inc/dbInfo.php';

// Records user name and password submissions
$uname = $_POST['uname'];
$pass = $_POST['psw'];

// Prepares the query for the DB
$stmt = $mysqli->prepare("SELECT pass FROM members WHERE uname = ?");
$stmt->bind_param( "s", $uname);

// Go, do it
$stmt->execute();

// Need the results from that select
$stmt->bind_result($res);
$stmt->fetch();

// Verify that the correct password is given
if(password_verify($pass, $res))
{
    $_SESSION['login'] = true;
    
    // Checks to see if the owner is logging in
    if( $uname == "DGreen" )
    {
        $_SESSION['name'] = "Owner";
        header('Location: owner.php');
    }
    else
    {
        $_SESSION['name'] = "Member";
        header('Location: member.php');
    }
}
else
{
    header('Location: login.php');
}

?>
