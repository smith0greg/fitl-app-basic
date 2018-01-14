<!DOCTYPE html>

<?php
	// http://fitl-app-basic.local/vehicle.php 				- generates error
	// http://fitl-app-basic.local/vehicle.php?type=car
	// http://fitl-app-basic.local/vehicle.php?type=truck
	// http://fitl-app-basic.local/vehicle.php?type=scooter - no error, but page is blank

	$type = '';
	//set 'type' using a request variable passed on the URL 
	// Add 'If exist' logic to avoid error if not specified on URL ?
	$type= $_REQUEST['type'];

	if ($type == 'car') {
		$vehicle = array(
			'make' =>  'Chevy',
			'model' =>  'Cavalier',
			'year' => '1991',
		);
	}
	elseif ($type == 'truck') {
		$vehicle = array(
			'make' =>  'Dodge',
			'model' =>  'Ram F150',
			'year' => '2017',
		);
	}
	else {
		// set empty variables
		$vehicle = array(
			'make' =>  '',
			'model' =>  '',
			'year' => '',
		);
		$type = '';
	}
?>

<html>
	<head>
		<title><?php echo $type; ?></title>
	</head>
	<body>
		<h1><?php echo $type; ?></h1>
		<p>
		Make: <?php echo $vehicle['make']; ?><br>
		Model: <?php echo $vehicle['model']; ?><br>
		Year: <?php echo $vehicle['year']; ?><br>
  		</p>
	</body>
</html>