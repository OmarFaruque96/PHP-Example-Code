<!--  
QUESTION**

Let you are in a building for some reasons and you are alone. Where the buildling have 100 floors with lift facility. 
  Now you want to get out from there using the lift. 
  
  Now compute the total time for leaving the building according to the below information.
  When (i) you are in 8th floor and lift is in 10th floor,  
	   (ii) you are in 6th floor and lift is in 6th floor,
	   (iii) you are in 5th floor and lift is in 2th floor,
  
  INFORMATION**
  ***************
  1. lift door takes 3 secs to open / close
  2. for your entering / leaving to lift, it takes 5 secs
  3. and lift takes 4 secs to travel from one floor to another 
  ***************

-->

<!DOCTYPE html>
<html>
<head>
	<meta lan="en">
	<title> PHP - 01 </title>
</head>
<body>
	<?php
		// declare some variable here 
		$my_position = 8;   // change to 6 / 5 as direction 
		$lift_position = 10;	// change to 6 / 2 as direction 
  
		$entering_time = 5;
		$leaving_time = 5;
		$to_open_door = 3;
		$to_close_door = 3;
		
		
		if($my_position > $lift_position){   // if i am in the upper floor from the lift 
			
			$time_to_arrive_in_myPos = (($my_position-$lift_position) *4);  // time for coming the lift in my position
			$time_to_travel_in_ground_floor = $my_position*4;   // time to travel from my position to ground floor 
			
			$result = $time_to_arrive_in_myPos + $to_open_door +$entering_time + $to_close_door + $time_to_travel_in_ground_floor + $to_open_door + $leaving_time;
			
			echo "Total time required : ". $result . "secs";
		}
		else if($lift_position > $my_position){   // if lift is in upper floor 
			
			$time_to_arrive_in_myPos = (($lift_position-$my_position) *4);    // time for coming the lift in my position
			$time_to_travel_in_ground_floor = $my_position*4;   // time to travel from my position to ground floor 
			
			$result = $time_to_arrive_in_myPos + $to_open_door +$entering_time + $to_close_door + $time_to_travel_in_ground_floor + $to_open_door + $leaving_time;
			
			echo "Total time required : ". $result . "secs";
		}
		else{    // if lift and i am in the same floor 
			
			// as lift and my position is same here so just need to calculate total time to travel in ground floor from my position 
			$time_to_travel_in_ground_floor = $my_position*4;   // time to travel from my position to ground floor 
			
			$result = $time_to_arrive_in_myPos + $to_open_door +$entering_time + $to_close_door + $time_to_travel_in_ground_floor + $to_open_door + $leaving_time;
			
			echo "Total time required : ". $result . "secs";
		}
		
	?>
</body>
</html>
