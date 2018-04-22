<?php
/**
 * Kung Fu site Schedule page.
 *
 * @version 4/19/18
 * @author Rachael Simmonds
 */

$path = './';
$page = 'Schedule';
include $path.'assets/inc/header.php';
?>



<h1>Class Times</h1>
<div class="classTimes">
	<?php
	    $path = './';
	  	require $path.'../../../dbInfo.inc';
		if ($mysqli) {

		  //get contents of table and send back...
		  $res=$mysqli->query('SELECT day, className, beginHr, beginMin, timeOfDay1, endHr, endMin, timeOfDay2 FROM classTimes');
		  if($res){
			while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){
				$records1[] = $rowHolder;
			}// end of while
		  }// end of if
			//var_dump($records1);
		}// end of if-mysqli
		else {
			echo "<h1> Error Connecting to Database</h1>";
		}


	?>
		<div class="times">

			<?php
					//var_dump($records1);
					foreach($records1 as $this_row){
						echo '<h2>'.$this_row['day'] . " " . $this_row['className']." " . $this_row['beginHr']."
						". $this_row['beginMin']." " . $this_row['timeOfDay1']." " . $this_row['endHr']."
						". $this_row['endMin']." ". $this_row['timeOfDay2'].'</h2>';
					}
			?>

			</div>
		</div>
</div>

	<div class="events">
	<?php
	    $path = './';
	  	require $path.'../../../dbInfo.php';
		if ($mysqli) {

		  //get contents of table and send back...
		  $res=$mysqli->query('SELECT date, eventTitle, eventDesc FROM events');
		  if($res){
			while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){
				$records2[] = $rowHolder;
			}// end of while
		  }// end of if
			//var_dump($records2);
		}// end of if-mysqli
		else {
			echo "<h1> Error Connecting to Database</h1>";
		}


	?>
		<div class="event">

			<?php
					//var_dump($records2);
					foreach($records2 as $this_row){
						echo '<h2>'.$this_row['date'] . " " . $this_row['eventTitle']." " . $this_row['eventDesc'].'</h2>';
					}
			?>

			</div>
		</div>
		<hr>
	</body>
</html>