<?php
/**
 * Created by PhpStorm.
 * User: Joseph Messare
 * Date: 4/8/18
 * Time: 9:47 PM
 */

// If login is clicked
/*if (isset( $_POST['submit'] ))
{

}
else
{
    // Redirects to login page
    header( "Location: login.php" );
}*/
session_start();
$path = './';
require $path . 'assets/inc/dbInfo.inc';

// Records user name and password submissions
$uname = $_POST['uname'];
$pass = $_POST['psw'];

// Prepares the query for the DB
$stmt = $mysqli->prepare("SELECT pass FROM members WHERE uname = ?");
$stmt->bind( "s", $_POST['uname']);

// Go, do it
$stmt->execute();

// Need the results from that select
$stmt->bind_result($res);
$stmt->fetch();

// Verify that the correct password is given
if(password_verify($_POST['pass'], $res))
{
    $_SESSION['login'] = true;
    $_SESSION['name'] = $_POST['uname'];

    header('Location: member.php');
}?>
