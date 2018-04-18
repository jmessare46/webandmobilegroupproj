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

<body>
	<!--mastergreen86@gmail.com real email-->
	<p>
		Phone: 123-456-7891
	</p>
	<a href="https://www.facebook.com/Moy-Don-Wing-Chun-Kung-Fu-1542972345772857/">Our Facebook Page </a>
	
	<h2>Ready to Apply?</h2>
	<p>Contact Us Here For More Info</p>
	<form action="gpProj/process_gpProj.php" method="POST">
		<div class="contactUs">
		First Name:<br>
		<input class="contactUs" type="text" name="fname">
		</div>
		
		<div class="contactUs">
		Last Name:<br>
		<input class="contactUs" type="text" name="lname">
		</div>
		
		<div class="contactUs">
		Phone Number:<br>
		<input class="contactUs" type="text" name="pnumber">
		</div>
		
		<div class="contactUs">
		Email:<br>
		<input type="text" name="email">
		</div>
		
		<div class="contactUs">
		Description:<br>
		<input id="desc" type="text" name="desc">
		</div>
		
		<div class="contactUs">
		<input type="submit" value="Submit">
		</div>
	</form>

</body>
</html>