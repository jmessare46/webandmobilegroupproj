<?php
/**
 * Created by PhpStorm.
 * User: Joseph Messare
 * Date: 4/29/18
* Time: 10:12 PM
*/
$path = './';
$page = 'Thank You';
include $path . 'assets/inc/header.php';

// Checks to see if the form has sent information
if(isset($_POST['name']) && isset($_POST['email']))
{
    if(isset($_POST['message']))
    {
        if(isset($_POST['number']))
        {
            $message = "Name: " . $_POST['name'] . "\rEmail: " . $_POST['email'] . "\rNumber: " . $_POST['number'] . "\rMessage: " . $_POST['message'];
        }
        else
        {
            $message = "Name: " . $_POST['name'] . "\rEmail: " . $_POST['email'] . "\rMessage: " . $_POST['message'];
        }
    }
    else
    {
        if(isset($_POST['number']))
        {
            $message = "Name: " . $_POST['name'] . "\rEmail: " . $_POST['email'] . "\rNumber: " . $_POST['number'];
        }
        else
        {
            $message = "Name: " . $_POST['name'] . "\rEmail: " . $_POST['email'];
        }
    }

    if(mail("mastergreen@rochesternywingchun.com", "Wing Chun Contact Us Form", $message ))
    {
        echo "<div id = 'submitLine'>Email successfully sent! Thank you for submitting your feedback. We will contact you shortly.</div>";
    }
    else
    {
        echo "<div id = 'submitLineError'>Error: email did not send successfully.</div>";
    }
}
else
{
    echo "<div id = 'submitLineError'> Error: Confirmation form not successfully sent. Please try again.</div>";
}

?>
</body>
</html>
