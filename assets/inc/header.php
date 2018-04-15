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
    <script rel="script" type="text/javascript" src="<?php echo $path;?>assets/js/functions.js"></script>
</head>
<body>

<!-- Navigation list shown at the top of the page -->
<nav id="navBar">
    <a href="index.php">Home</a>
    <a href="about.php">About Us</a>
    <a href="contact.php">Contact Us</a>
    <a href="history.php">History</a>
    <a href="curriculum.php">Curriculum</a>
    <a href="schedule.php">Classes & Events</a>
    <div id="loginLink">
        <a href="login.php">Members</a>
    </div>
</nav><br>