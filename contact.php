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

<h1 class="title"><?php echo $page ?></h1>
<div id="heading">
    <a href="https://www.facebook.com/Moy-Don-Wing-Chun-Kung-Fu-1542972345772857/">
        <img id="fb" src="assets/images/fbLogo.png" alt="Facebook Logo" title="Facebook Logo"></a>

    <div>
        <h3>Call us</h3>
        <strong>(585) 451-9909</strong>
    </div>
</div>
<div id="contactus">
    <div class="formStyle">
        <h1>Contact Us</h1>
        <form action="contactSubmit.php" method="POST">
            <input type="text" name="name" placeholder="* Your Name" required/>
            <input type="number" name="number" placeholder="Phone Number"/>
            <input type="email" name="email" placeholder="* Email Address" required/>
            <textarea name="message" placeholder="* Type your Message" required></textarea>
            <input type="submit" value="submit" />
        </form>
    </div>
</div>
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2911.1249885909597!2d-77.5492481853471!3d43.143904593232904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d6ca88be8fbbf1%3A0xb69df47eca99948a!2s80+Rockwood+Pl%2C+Rochester%2C+NY+14610!5e0!3m2!1sen!2sus!4v1524438177534" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></body>
</html>
