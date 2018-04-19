<?php
/**
 * Kung Fu site contact us page.
 *
 * @version 3/29/18
 * @author Joseph Messare & Kenan Johnson
 */

$path = './';
$page = 'Contact Us';
include $path . 'assets/inc/header.php';
?>



<body>

<div id="contactus">
    <h1 class="title"><?php echo $page ?></h1>
    <p>
        Phone: 123-456-7890
    </p>
    <p>
        Email: moydonkungdfu@gmail.com
    </p>
    <a href="https://www.facebook.com/Moy-Don-Wing-Chun-Kung-Fu-1542972345772857/">Our Facebook Page </a><br><br>

    <h2>Ready to Apply?</h2>
    <p>Contact Us Here For More Info</p><br><br>
    <form action="assets/inc/process_gpProj.php" method="POST">
        First Name: <br>
        <input type="text" name="fname" placeholder="Enter your first name here...">
        <br>
        Last Name:<br>
        <input type="text" name="lname" placeholder="Enter your last name here...">
        <br>
        Phone Number:<br>
        <input type="text" name="pnumber" placeholder="Enter your phone number...">
        <br>
        Email:<br>
        <input type="text" name="email" placeholder="Enter your email...">
        <br>
        Description:<br>
        <textarea rows="10" cols="40" placeholder="Enter description here..."></textarea>
        <br>
        <br>
        <input type="submit" value="Submit" id="submit"/>
    </form>
</div><br>


</body>
</html>