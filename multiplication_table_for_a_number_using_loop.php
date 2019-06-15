<!--  
Loop problem

print multiplication table of a given number using for loop

-->

<!DOCTYPE html>
<html>
<head>
	<meta lan="en">
	<title> PHP - 01 </title>
</head>
<body>
	<?php
	
		$number = 13;
		
		for($i=1; $i<=10; $i++)
		{
			$result = $number * $i;
			
			echo $i . " * " . $number . " = " . $result . "<br>";
		}

	?>
</body>
</html>
