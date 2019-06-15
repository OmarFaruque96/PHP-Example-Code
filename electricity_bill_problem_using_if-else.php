<!--  
if-else problem

program to input electricity unit charge and calculate the total electricity bill according to the given condition:

-For first 50 units Taka. 0.50/unit
-For next 100 units Taka. 0.75/unit
-For next 100 units Taka. 1.20/unit
-For unit above 250 Taka. 1.50/unit

An additional surcharge of 20% is added to the bill.

-->

<!DOCTYPE html>
<html>
<head>
	<meta lan="en">
	<title> PHP - 01 </title>
</head>
<body>
	<?php
		
		$unit = 263; // input (give some different inputs to check) 
		
		/* Calculate electricity bill according to given conditions */
		if($unit <= 50)
		{
			$amount = $unit * 0.50;
		}
		else if($unit <= 150)
		{
			$amount = 25 + (($unit-50) * 0.75);
		}
		else if($unit <= 250)
		{
			$amount = 100 + (($unit-150) * 1.20);
		}
		else
		{
			$amount = 220 + (($unit-250) * 1.50);
		}

		/*
		 * Calculate total electricity bill
		 * after adding surcharge
		 */
		$sur_charge = $amount * 0.20;   // additional surcharge of 20% 
		$total_amount  = $amount + $sur_charge;   // total cost 

		echo "Total Electricity Bill : " . $total_amount . "Taka";
		
	?>
</body>
</html>
