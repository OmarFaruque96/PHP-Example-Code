<!--  
Loop problem

program to find the sum of a digit and total digit number 

-->

<!DOCTYPE html>
<html>
<head>
	<meta lan="en">
	<title> PHP - 01 </title>
</head>
<body>
	<?php
	
		$num = 15349 ; // input (try with different values)
		$count = 0;   // to count the digit 
		$sum = 0;     // sum varibale to store all the sum of the digit 
		
		while($num != 0)
		{
			/* Increment digit count */
			$count ++;

			/* Remove last digit of 'num' */
			$remainder = $num % 10;    // need to convert into integer otherwise it will take float number 
			$temp = (int)$num / 10;
			$num = (int)$temp;
			// store in sum variable 
			$sum += $remainder;
			
		}

		echo "Total digits: " . $count . "<br> Total sum: " . $sum ;

	?>
</body>
</html>
