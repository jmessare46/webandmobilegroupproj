<?php
/**
 * Created by PhpStorm.
 * User: Joseph Messare
 * Date: 4/19/18
 * Time: 8:30 AM
 */

session_start();
session_name("Login");
$path = './';
$page = 'Owner Page';
include $path . 'assets/inc/header.php';
require $path . 'assets/inc/dbInfo.php';

// Checks to see if user is logged in
if ( $_SESSION['name'] != 'Owner' )
{
    header('Location: login.php');
}

// Check if the passwords are the same if there is uname, pass, pass2 and both pass and pass2 match
if( !empty($_POST['uname']) && !empty($_POST['pass']) && !empty($_POST['pass2']) && passMatch())
{
    $smt = $mysqli->prepare("INSERT INTO members (uname, pass) VALUES (?, ?)");
    $hash = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $smt->bind_param( "ss", $_POST['uname'], $hash );
    $smt->execute();
    $smt->close();
}

// Checks to make sure the confirmation password and actual password match
function passMatch()
{
    if(strcmp($_POST['pass'], $_POST['pass2']) == 0)
    {
        // Passwords matched
        return true;
    }
    else
    {
        // Passwords didn't match
        return false;
    }
}

// Changes class times on website
if(isset($_POST['day']) && isset($_POST['start']) && isset($_POST['end']))
{
    // Do something
    $smt = $mysqli->prepare("INSERT INTO classTimes (start, end) VALUES (?, ?) WHERE day='".$_POST['day']."'");
    $smt->bind_param( "ss", $_POST['start'], $_POST['end'] );
    $smt->execute();
    $smt->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>Register</title>
    <style type="text/css">
        form div
        {
            margin: 1em;
        }
        form div label
        {
            float: left;
            width: 10%;
        }
        form div.radio {
            float: left;
        }
        .clearfix {
            clear: both;
        }
    </style>
</head>
<body>
<div id="makeuser">
    <a id="logout" href="logout.php">Logout</a>
    
    <div id="memWrapper" class="column">
    <a id="member" href="member.php">Member Page</a>
        <h1 id="memHeader">Add a Member</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return validateNewUser();">
            <div>
                User Name:<br>
                <input type="text" name="uname" size="30" />
            </div>
            <div>
                Password:<br>
                <input type="password" name="pass" size="30" />
            </div>
            <div>
                Confirm Password:<br>
                <input type="password" name="pass2" size="30" />
            </div>
            <div class="clearfix">
                <input class="button" type="reset" value="Reset User" />
                <input class="button" type="submit" value="Add User" />
            </div>
        </form><br>
    </div>

    <figure class='vidPic'>
        <img src='assets/images/MoyDonLogo.jpg' class='videoPics' onclick="showVideo('video', 'vidPic', 'closeVid', 1)">
        <figcaption class='vidDes'>How to Delete Users From Site</figcaption>
    </figure>

    <div class='video'>
        <video controls src='assets/instructions/How%20to%20Delete%20Users%20From%20Site.mov'></video>
    </div>

    <div class='closeVid' onclick="closeVideo('video', 'vidPic', 'closeVid', 1)"></div>

    <figure class='vidPic'>
        <img src='assets/images/MoyDonLogo.jpg' class='videoPics' onclick="showVideo('video', 'vidPic', 'closeVid', 2)">
        <figcaption class='vidDes'>Update, Change, and Remove Class Times</figcaption>
    </figure>

    <div class='video'>
        <video controls src='assets/instructions/Update,%20Change,%20and%20Remove%20Class%20Times.mov'></video>
    </div>

    <div class='closeVid' onclick="closeVideo('video', 'vidPic', 'closeVid', 2)"></div>

    <figure class='vidPic'>
        <img src='assets/images/MoyDonLogo.jpg' class='videoPics' onclick="showVideo('video', 'vidPic', 'closeVid', 3)">
        <figcaption class='vidDes'>How to Upload Videos to Members Page</figcaption>
    </figure>

    <div class='video'>
        <video controls src='assets/instructions/How%20to%20Upload%20Videos%20to%20Member%20Page.mov'></video>
    </div>

    <div class='closeVid' onclick="closeVideo('video', 'vidPic', 'closeVid', 3)"></div>
</div>
</body>
</html>
