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
		Phone: 123-456-7890
	</p>
	<p>
		Email: moydonkungdfu@gmail.com
	</p>
	<a href="https://www.facebook.com/Moy-Don-Wing-Chun-Kung-Fu-1542972345772857/">Our Facebook Page </a>
	
	<h2>Ready to Apply?</h2>
	<p>Contact Us Here For More Info</p>
	<form action="../../process_gpProj.php" method="POST">
		First Name: <br>
		<input type="text" name="fname">
		<br>
		Last Name:<br>
		<input type="text" name="lname">
		<br>
		Phone Number:<br>
		<input type="text" name="pnumber">
		<br>
		Email:<br>
		<input type="text" name="email">
		<br>
		Description:<br>
		<input type="text" name="desc">
		<br>
		<br>
		<input type="submit" value="Submit">
	</form>

</body>
</html>