<?php 
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$pnumber = $_POST['pnumber'];
	$emailCU = $_POST['email'];
	$desc = $_POST['desc'];
	$destination_email="kmj1556@rit.edu";
	$email_subject="Moy Don Contact Info";
	$email_body =  "$fname $lname wants to contact you.\n";
	$email_body .= "They said $desc\n";
	$email_body .= "Their email is $emailCU and their phone number is $pnumber\n";
	mail($destination_email, $email_subject, $email_body);
        echo "Thank You for submitting your feedback. We will contact you shortly.";
?>
 <?php
//$path = './';
//$page = 'Thank You';
//include $path . 'assets/inc/header.php';
?>
<!--<body>
<h1 class="title"><?php echo $page ?></h1>
</body> -->