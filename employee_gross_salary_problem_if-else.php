<!--  
if-else problem

program to input basic salary of an employee and calculate gross salary according to given conditions.

-Basic Salary <= 5000 : HRA = 20%, DA = 60%
-Basic Salary is between 5001 to 10000 : HRA = 25%, DA = 80%
-Basic Salary >= 10001 : HRA = 30%, DA = 95%


-->

<!DOCTYPE html>
<html>
<head>
	<meta lan="en">
	<title> PHP - 01 </title>
</head>
<body>
	<?php
		
		
		$basic = 15000;  // input  
		
		/* Calculate D.A and H.R.A according to specified conditions */
		if($basic <= 5000)
		{
			$da  = $basic * 0.6;
			$hra = $basic * 0.2;
		}
		else if($basic <= 10000)
		{
			$da  = $basic * 0.8;
			$hra = $basic * 0.25;
		}
		else
		{
			$da  = $basic * 0.95;
			$hra = $basic * 0.3;
		}

		/* Calculate gross salary */
		$gross = $basic + $hra + $da;

		echo "GROSS SALARY OF EMPLOYEE = " . $gross . "Taka";
		
	?>
</body>
</html>
