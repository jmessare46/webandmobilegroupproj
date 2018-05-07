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

<header>
<h1>Class Times</h1>
</header>

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
                echo "<table><tr><th>Day</th><th>Start Time</th><th>End Time</th></tr>";
				foreach($records as $this_row)
				{
					echo "<tr><td> " . $this_row['day'] . "</td><td>" . $this_row['start'] . "</td><td>" . $this_row['end'] . "</td></tr>";
				}
                echo "</table>";
			?>
        </div>

            <div class="events">
                <iframe src="https://docs.google.com/presentation/d/e/2PACX-1vQyeAArOAxuCmY64HjBmmBney6cxg1RiNaLnkB0UX15WYomLVMa8jLEoSZ5YF86e_U3GWNpzdQkx2xD/embed?start=true&loop=true&delayms=10000" frameborder="0" width="960" height="569" allowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true"></iframe>
            </div>

        <div class="con">
            <p>
                If you would like to schedule a private lesson please click <a href="contact.php">here</a> to go to
                the contact us page.
            </p>
        </div>
</div>
</body>
</html>
