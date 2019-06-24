<!DOCTYPE>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>

<body>
<?php
	
	$fruit = "Banana";
	
	switch($fruit){
		case "Apple": echo "Apple is found here";
			break;
		case "Banana": echo "Banana is found here";
			break;
		case "Berry": echo "Berry is found here";
			break;
		case "Grape": echo "Grape is found here";
			break;
		
		default: echo "Sorry ! Not Match";
	}
	
?>

</body>
</html>
