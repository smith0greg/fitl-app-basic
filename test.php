<!DOCTYPE html>

<?php
	// http://fitl-app-basic.local/test.php
	// http://fitl-app-basic.local/test.php?id=1
	// http://fitl-app-basic.local/test.php?id=1
	// http://fitl-app-basic.local/test.php?id=3

	// set empty variables
	$variable = '';
	$title = ''; 
	$id = '';

	//set id using a request variable passed on the URL 
	$id = $_REQUEST['id'];

	// DIDN'T WORK - NOT SURE HOW YOU CONCATENATE STRINGS
	$title = 'FITL - Page '  && $id;

	if ($id == 1) {
		//set the variable
		$variable = 'myvariable1'; 
	}
	elseif ($id == 2) {
		//set the variable to this instead
		$variable = 'myvariable2'; 
	}
?>

<html>
	<head>
		<title><?php echo $title; ?></title>
	</head>
	<body>
		<h1>id = <?php echo $_REQUEST['id']; ?></h1>
		<p>
		variable = <?php echo $variable; ?>
  		</p>
	</body>
</html>