<!--  
if-else problem

1. check whether a number is divisible by 5 and 11 or not 

-->

<!DOCTYPE html>
<html>
<head>
	<meta lan="en">
	<title> PHP - 01 </title>
</head>
<body>
	<?php
		
		$number = 55 ; // input (you can give different values to check) 
		
		if($number % 5 == 0 && $number % 11 == 0){   // using mod to check weather it is divisible or not 
			echo $number . " is divisible by 5 and 11";
		}else{
			echo $number . " is not divisible by 5 and 11" ;
		}
	?>
</body>
</html>
