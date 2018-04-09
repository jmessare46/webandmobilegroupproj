<?php
/**
 * Created by PhpStorm.
 * User: Joseph Messare
 * Date: 3/29/18
 * Time: 12:23 PM
 */
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo $page;?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo $path;?>assets/css/stylesheet.css"/>
    <script src="<?php echo $path;?>assets/js/functions.js"></script>
</head>
<body>

<!-- Navigation list shown at the top of the page -->
<div id="nav">
    <ul id="navlist">
        <li onclick="location.href='index.php'">Home</li>
        <li onclick="location.href='about.php'">About Us</li>
        <li onclick="location.href='contact.php'">Contact Us</li>
        <li onclick="location.href='history.php'">History</li>
        <li onclick="location.href='curriculum.php'">Cirriculum</li>
        <li onclick="location.href='schedule.php'">Classes & Events</li>
        <li onclick="location.href='login.php'">Members Page</li>
    </ul>
</div><br>