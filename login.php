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


<form id="login" method="POST" action="loginAuth.php">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required><br>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required><br>

    <button type="submit" name="submit">Login</button>
    <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
    </label><br>
</form>

