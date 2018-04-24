<?php
/**
 * Created by PhpStorm.
 * User: Joseph Messare
 * Date: 4/10/18
 * Time: 9:35 PM
 */

session_start();
session_name("Login");
$_SESSION['login'] = false;
header('Location: login.php')
?>