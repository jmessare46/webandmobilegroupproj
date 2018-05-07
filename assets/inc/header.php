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
    <script rel="script" src="<?php echo $path;?>assets/js/functions.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Montserrat:900|Noto+Sans" rel="stylesheet">
    <link rel="icon" type="image/png" href="../../assets/images/favicon.png">
</head>
<body>

<!-- Navigation list shown at the top of the page -->
<nav id="navBar" class="topNav">
    <!-- Hamburger Menu Icon -->
    <a href="javascript:void(0);" class="icon" onclick="isResponsive()">&#9776;</a>
    <a id="indexLink" href="index.php">Home</a>
    <a href="about.php">About Us</a>
    <a href="contact.php">Contact Us</a>
    <a href="history.php">History</a>
    <a href="curriculum.php">Curriculum</a>
    <a href="schedule.php">Classes & Events</a>
    <div id="loginLink">
        <a href="login.php"><?php
            if(session_id() == '' || !isset($_SESSION))
            {
                // Session isn't started
                session_start();
                session_name("Login");
            }

            // If user is logged in echos Members if not echos Login
            if(isset($_SESSION['name']))
            {
                echo $_SESSION['name'];
            }
            else
            {
                echo "Login";
            }
        ?>
        </a>
    </div>
</nav><br>
