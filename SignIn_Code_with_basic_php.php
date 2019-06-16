<!--
	name and password checking 
	like a login page.
	
-->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sign In </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

	<?php
	
		$username = "Amar Akbar";   // input
		$password = "123456789"; //input 
		
		if($username == "Amar Akbar"){    //check if the user name is matching or not 
			if($password == "123456789"){    //(after name matched) check if the password is matching or not 
				echo '<div class="alert alert-success">Correct Information!</div>';  // if name and pass is correct 
			}
			else{
				echo '<div class="alert alert-warning">Invalid Password!</div>';  //if name correct but pass incorrect 
			}
		}else{  // if username not matched 
			echo '<div class="alert alert-danger">Invalid User!</div>';  
		}
	?>
  
</div>

</body>
</html>
