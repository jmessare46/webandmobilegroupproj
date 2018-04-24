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

// Checks to see if user is already logged in
if ( !isset($_SESSION['login']) || $_SESSION['login'] == false )
{
    header('Location: login.php');
}

// Check if the passwords are the same
// If there is uname, pass, pass2 and both pass and pass2 match
if( !empty($_POST['uname']) && !empty($_POST['pass']) && !empty($_POST['pass2']) && passMatch())
{
    // Since data is coming from the database you need to use prepare statements
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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset=utf-8" />
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
<a id="logout" href="logout.php">Logout</a>
<form action = "<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return validateNewUser();">
    <div>
        User Name:
        <input type="text" name="uname" size="30" />
    </div>
    <div>
        Password:
        <input type="password" name="pass" size="30" />
    </div>
    <div>
        Password (again):
        <input type="password" name="pass2" size="30" />
    </div>
    <div class="clearfix">
        <input type="reset" value="Reset Form" />
        <input type="submit" value="Submit Form" />
    </div>
</form>
</body>
</html>
