<!DOCTYPE>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
<?php
	//associative array 

	$elements = array(
		'fruit' => 'banana',
		'color' => 'blue',
		'car'   => 'toyota',
		'food'  => 'burger',
		'game'  => 'cricket'
	);
	
	// foreach loop
	
	$x = array_keys($elements); // store the keys in variable $x
	
	for($i=0;$i<count($elements);$i++){
		echo $x[$i] . " = " . $elements[$x[$i]] . "<br>";
	}
	
?>
</body>
</html>
