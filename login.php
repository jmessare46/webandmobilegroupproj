<?php
/**
 * Created by PhpStorm.
 * User: Joseph Messare
 * Date: 4/8/18
 * Time: 9:35 PM
 */

$path = './';
$page = 'Login Page';
include $path . 'assets/inc/header.php';

// Checks to see if user is already logged in
if ( isset($_SESSION['user']) && $_SESSION['user'] == "joe")
{
    header("Location: member.php");
}
?>

<div id="loginBox">
    <h1>Member Login Page</h1>
    <form id="login" method="POST" action="loginAuth.php">
        <div id="loginCont">
            <label for="uname">Username: </label><br>
            <input type="text" placeholder="Enter Username" name="uname" required><br>

            <label for="psw">Password: </label><br>
            <input type="password" placeholder="Enter Password" name="psw" required><br>
            <button type="submit" name="submit">Login</button>
        </div>
    </form>
</div>

