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
	
	<p>
		Address: 80 Rockwell Place<br><!--Move to the right side of the page-->
				 Rochester, NY 14...(need to find out)
				 Located near the Record Archives suite 208.
	</p>
	<p>
		Phone: 123-456-7890
	</p>
	<p>
		Email: moydonkungdfu@gmail.com
	</p>
	<a href="https://www.facebook.com/Moy-Don-Wing-Chun-Kung-Fu-1542972345772857/">Our Facebook Page </a>
	
	<h2>Ready to Apply?</h2>
	<h3>Contact Us Here For More Info</h3>
	<form action="idk yet.php">
	     First Name: <br>
		<input type="text" name="firstname">
		<br>
		Last Name:<br>
		<input type="text" name="lastname">
		<br>
		Phone Number:<br>
		<input type="text" name="phonenumber">
		<br>
		Email:<br>
		<input type="text" name="email">
		<br>
		<br>
		<input type="submit" value="Submit">
	</form><br>
		
		
		<h1>Location of Moy Don Wing Kung Flu</h1>
		<div class="map">
	      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2911.125174976191!2d-77.54924818408585!3d43.14390067914205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d6ca88be8fbbf1%3A0x471c6519f277ed9b!2s80+Rockwood+Pl+%23208%2C+Rochester%2C+NY+14610!5e0!3m2!1sen!2sus!4v1523661300322" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	    </div>

</body>
</html>