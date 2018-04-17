<?php
    $path = './';
  	require $path.'assets/inc/dbInfo.inc';
	if ($mysqli) {
	  //IF we are adding a new user
	  //if( !empty($_GET['name']) && !empty($_GET['event']) ){
		/*
			we are using client entered data - therefore we HAVE TO USE a prepared statement
			1)prepare my query
			2)bind
			3)execute
			4)close
		*/
		$stmt=$mysqli->prepare("insert into events (eventTitle, eventDesc ) values (?, ?)");
		$stmt->bind_param("ss",$_GET['eventTitle'],$_GET['eventDesc']);
		$stmt->execute();
		$stmt->close();
	  }
	  //get contents of table and send back...
	  $res=$mysqli->query('select date, eventTitle, eventDesc from events');
	  if($res){
		while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){
			$records[] = $rowHolder;
		}
	  }
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Class Events</title>
</head>
<body>
<div class="event">
	<ul>
	<?php
		//var_dump($records);
		foreach($records as $this_row){
			echo '<li>'.$this_row['date'] . " " . $this_row['eventTitle']." " . $this_row['eventDesc'].'</li>';
		}
	?>
	</ul>
</div>
<hr/>

</body>
</html>