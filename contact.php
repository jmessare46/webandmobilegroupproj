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

    <a href="https://www.facebook.com/Moy-Don-Wing-Chun-Kung-Fu-1542972345772857/">
    <img id="fb" src="assets/images/fbLogo.png" alt="Facebook Logo" title="Facebook Logo"></a>
    <div class="formStyle">
        <h1>Contact Us</h1>
        <form action="assets/inc/process_gpProj.php" method="POST">
            <input type="text" name="name" placeholder="* Your Name" required />
            <input type="number" name="number" placeholder="Phone Number" required />
            <input type="email" name="email" placeholder="* Email Address" required />
            <textarea name="msg" placeholder="* Type your Message"></textarea>
            <input type="submit" value="Send" />
        </form>
    </div>
</body>
</html>
