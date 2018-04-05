<!--<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
	<title> References </title>
	</head> -->

/**
 * Kung Fu site contact us page.
 *
 * @version 3/29/18
 * @author Joseph Messare & Kenan Johnson
 */

$path = './';
$page = 'Contact Us';
include $path.'assets/inc/header.php';
?>

<h1 id="title"><?php echo $page ?></h1>

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
	<p>Contact Us Here For More Info</p>
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
	</form>

</body>
</html>