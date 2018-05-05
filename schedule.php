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
	  	require $path.'assets/inc/dbInfo.php';
		if ($mysqli) 
		{
		  // Gets contents of table and send back...
		  $res=$mysqli->query('SELECT (day, start, end) FROM classTimes');
		  if($res){
			while($rowHolder = mysqli_fetch_array($res, MYSQLI_ASSOC))
			{
				$records[] = $rowHolder;
			}// end of while
		  }// end of if
			//var_dump($records);
		}// end of if-mysqli
		else 
		{
			echo "<h1> Error Connecting to Database</h1>";
		}


	?>
		<div class="times">

			<?php
				// var_dump($records);
				foreach($records as $this_row)
				{
					echo '<h2>' . $this_row['day'] . " " . $this_row['start'] . " " . $this_row['end'] . '</h2>';
				}
			?>

			</div>
		</div>
	<div class="con">
		<p>If you would like to schedule a private lesson,</p>
		<p>please click the button below.</p>

	</div>
	<div class="button1">
				<span><a href="contact.php">Contact Us</a></span>
	</div>

	<div class="events">
		<iframe src="https://docs.google.com/presentation/d/e/2PACX-1vQyeAArOAxuCmY64HjBmmBney6cxg1RiNaLnkB0UX15WYomLVMa8jLEoSZ5YF86e_U3GWNpzdQkx2xD/embed?start=true&loop=true&delayms=10000" frameborder="0" width="960" height="569" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
	</div>



	</body>
</html>