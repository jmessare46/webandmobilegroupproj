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
</head>
<body>

<!-- Navigation list shown at the top of the page -->
<div id="nav">
    <ul id="navlist">
        <li onclick="location.href='index.php'">Home</li>
        <li onclick="location.href='about.php'">About Us</li>
        <li onclick="location.href='contact.php'">Contact Us</li>
        <li onclick="location.href='history.php'">History</li>
        <li onclick="location.href='curriculum.php'">Curriculum</li>
        <li onclick="location.href='media.php'">Pictures & Videos</li>
        <li onclick="location.href='schedule.php'">Classes & Events</li>
    </ul>
</div><br>