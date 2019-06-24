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
	
	foreach($elements as $key => $value){
		echo $key . " = ". $value . "<br>";
	}
?>