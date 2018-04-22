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

<<<<<<< HEAD
<<<<<<< HEAD
<!-- <<<<<<< HEAD -->
=======
<body>
<h1 class="title"><?php echo $page ?></h1>
>>>>>>> master

<body>
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
<!-- Kenan Stuff
<body>
<div id="contact">
	<div id="contactTitle">
	<a href="https://www.facebook.com/Moy-Don-Wing-Chun-Kung-Fu-1542972345772857/">
	<img id="fb" src="assets/images/fbLogo.png" alt="Facebook Logo" title="Facebook Logo"></a>
<h1 class="title"><?php echo $page ?></h1> -->

	<!--mastergreen86@gmail.com real email -->
	<!-- Kenan form stuff!! we can take some thing from this form!!
	<p>
		Phone: 123-456-7891
	</p>
	<h2>Ready to Apply?</h2>
	</div>
	<form action="gpProj/process_gpProj.php" method="POST">
		<div class="contactUs">
		<div id="fname"><span class="asterick">*</span> First Name:</div>
		<input class="text" type="text" name="fname" placeholder="Enter your first name here...">
		</div>
		
		<div class="contactUs">
		<div id="lname"><span class="asterick">*</span> Last Name:</div>
		<input class="text" type="text" name="lname" placeholder="Enter your last name here...">
		</div>
		
		<div class="contactUs">
		<div id="pnum">Phone Number:</div>
		<input class="text" type="text" name="pnumber" placeholder="Enter your phone number...">
		</div>
		
		<div class="contactUs">
		<div id="eMail"><span class="asterick">*</span> Email:</div>
		<input class="text" type="text" name="email" placeholder="Enter your email...">
		</div>
		
		<div class="contactUs">
		<div id="txtDesc"><span class="asterick">*</span> Description:</div>
		<input id="desc" type="text" name="desc" placeholder="Enter your questions or concerns here...">
		</div>
		
		<div class="contactUs">
		<input id="submit" type="submit" value="Send">
		</div>
	</form>
</div>
<<<<<<< HEAD
<!--======= -->

<!--
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
=======
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
>>>>>>> master
