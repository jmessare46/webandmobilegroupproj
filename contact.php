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

<img src="assets/images/contact-us.png" id="banner" alt="Contact us Banner"/>
	
 <section id="wrapper">
  <div class="formStyle">
	<h1>Contact Us</h1>
		<form action="assets/inc/process_gpProj.php" method="POST">
			<span class="asterick">*</span><input type="text" name="name" placeholder="Your Name" required />
			<input type="number" name="number" placeholder="Phone Number" required />
			<span class="asterick">*</span><input type="email" name="email" placeholder="Email Address" required />
			<span class="asterick">*</span><textarea name="msg" placeholder="Type your Message" required></textarea>
			<input type="submit" value="Send" />
		</form>
  </div>
 </section>
</body>
</html>