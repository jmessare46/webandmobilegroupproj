<?php

$host = "localhost";
$user = "jwm2957";
$password = "necknews";
$database = "jwm2957";

$mysqli = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno())
{
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}
?>
