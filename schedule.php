<?php
/**
 * Kung Fu site Schedule page.
 *
 * @version 4/2/18
 * @author Rachael Simmonds
 */

$path = './';
$page = 'Schedule';
include $path.'assets/inc/header.php';
?>

<div class="classTimes">

<h1>Class Times</h1>

			<br>
			<br>
		<h2>Monday & Wednesday: 6:30 PM - 8:00 PM</h2>
			<br>
			<br>
		<h2>Tuesday & Thursday: 8:00 AM - 9:30 AM</h2>
			<br>
			<br>
		<h2>Saturday: 11:00 AM - 12:30 PM</h2>
			<br>
			<br>
	<h1>Private Lessons</h1>
	<br>
		<div class="pTag">
			<p>For those who would like private lessons, </p>
			<p>you are able to schedule a time on the CONTACT US tab. </p>

			<a href="contact.php">Contact Us</a>
		</div>
</div>

	<div class="events">
	<?php
	    $path = './';
	  	require $path.'assets/sql/dbInfo.inc';
		if ($mysqli) {
		  //IF we are adding a new user
		    if( !empty($_GET['eventTitle']) && !empty($_GET['eventDesc']) ){
			/*
				we are using client entered data - therefore we HAVE TO USE a prepared statement
				1)prepare my query
				2)bind
				3)execute
				4)close
			*/
			$stmt=$mysqli->prepare("INSERT INTO events (eventTitle, eventDesc ) VALUES (?, ?)");
			$stmt->bind_param("ss",$_GET['eventTitle'],$_GET['eventDesc']);
			$stmt->execute();
			$stmt->close();
		  }
		  //get contents of table and send back...
		  $res=$mysqli->query('SELECT date, eventTitle, eventDesc FROM events');
		  if($res){
			while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){
				$records[] = $rowHolder;
			}
		  }
		}
	?>
		<div class="event">

			<?php
					//var_dump($records);
					foreach($records as $this_row){
						echo '<li>'.$this_row['date'] . " " . $this_row['eventTitle']." " . $this_row['eventDesc'].'</li>';
					}
			?>

			</div>
		</div>
		<hr>
	</body>
</html>