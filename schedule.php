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
		  $res=$mysqli->query('SELECT day, start, end FROM classTimes');
		  $records = array();
		  if($res)
		  {
			while($rowHolder = mysqli_fetch_array($res, MYSQLI_ASSOC))
			{
				$records[] = $rowHolder;
			}
		  }
		}
		else 
		{
			echo "<h1> Error Connecting to Database</h1>";
		}


	?>
		<div class="times">
			<?php
<<<<<<< HEAD
				foreach($records as $this_row)
				{
					echo "<div style='text-align:center; border-style: dotted; background-color:#e6ffe6; font-size:large;'> " .
					"<tr><td style='border: none; background-color: #dddddd; padding: 5px; width: 100px;'>" . $this_row['day'] .
                    " </td><td style='border: none; background-color: #dddddd; padding: 5px; width: 100px;'>" . $this_row['start'] .
                    " - </td><td style='border: none; background-color: #dddddd; padding: 5px; width: 100px;'>" . $this_row['end'] .
                    " </td></tr>";
=======
				// var_dump($records);
                echo "<table style='float: left;'><tr><th>Day</th><th>Start Time</th><th>End Time</th></tr>";
				foreach($records as $this_row)
				{
					echo "<tr><td> " . $this_row['day'] . "</td><td>" . $this_row['start'] . "</td><td>" . $this_row['end'] . "</td></tr>";
>>>>>>> joesbranch
				}
                echo "</table>";
			?>
            <div class="button1">
                <span><a style="float: right;" href="contact.php">Contact Us</a></span>
            </div>

            <div class="con">
                <p>If you would like to schedule a private lesson,</p>
                <p>please click the button below.</p>

            </div>

<<<<<<< HEAD
	</body>
=======
            <div class="events">
                <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vQyeAArOAxuCmY64HjBmmBney6cxg1RiNaLnkB0UX15WYomLVMa8jLEoSZ5YF86e_U3GWNpzdQkx2xD/embed?start=true&loop=true&delayms=10000" frameborder="0" width="960" height="569" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
            </div>
        </div>
</div>
</body>
>>>>>>> joesbranch
</html>
