<!--  
take a students detail information and print those info 
-->

<!DOCTYPE html>
<html>
<head>
	<meta lan="en">
	<title> PHP - 01 </title>
</head>
<body>
	<?php
		// declare some variable
		$student_name = "Sakib Al Hasan";  //string type variable
		$student_age  = 23; //integer type variable
		$student_institute = "Shikhbe Shobai"; //string type variable
		$student_course = "Wordpress theme customization and development";  //string type variable
		$student_height = 5.9; //float type varibale 5.9 feet 
		$is_male = true; // boolean type variable (only true or false)
		
		// show the detail information 
		// <br> is for making a new line. thus below info will print line by line 
		echo "Name: " . $student_name . "<br>   
			   Age: " . $student_age  . "<br>
		Institution:" . $student_institute . "<br>
			Course :" . $student_course . " <br>
			Height :" . $student_height . "<br>
			  Male :" . $is_male . "<br>" 
		
	?>
</body>
</html>
