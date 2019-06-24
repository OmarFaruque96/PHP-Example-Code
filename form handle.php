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

	if(isset($_POST['register'])){
		$name  = $_POST['name'];
		$mail  = $_POST['email'];
		$phone = $_POST['contactInfo'];
		$pass  = $_POST['password'];
		$pass2 = $_POST['password2'];
		
		//print the data 
		
		echo "Name     : " . $name;
		echo "Email    : " . $mail;
		echo "Phone No : " . $phone;
		echo "Password : " . $pass;
		
		if($pass == $pass2){
			// code for mySQL to insert the data into database
			
		}else{
			
			// show error message 
			
		}
		
	}
?>
	<section style="text-align: center">
	
	<h1> User Registration </h1>
	<br>
	<div class="container">
		<div class="row">
		<div class="col-md-3">
		</div>
			<div class="col-md-6 offset-md-6">
				<form action="" method="post">
					<div class="form-group">
						<label for="userName"> Full Name </label>
						<input type="text" name="name" placeholder="Enter your name " class="form-control">
					</div>
					<div class="form-group">
						<label for="userMail"> Email </label>
						<input type="email" name="email" placeholder="Enter your mail " class="form-control">
					</div>
					<div class="form-group">
					<label for="phoneNumber"> Phone Number </label>
						<input type="text" name="contactInfo" placeholder="Enter your Phone no  " class="form-control">
					</div>
					<div class="form-group">
						<label for="Password"> Password </label>
						<input type="password" name="password" placeholder="Enter password " class="form-control">
					</div>
					<div class="form-group">
						<label for="confirmPassword"> Confirm Password </label>
						<input type="password" name="password2" placeholder="Enter password again " class="form-control">
					</div>
					
					<div class="form-group">				
						<input type="submit" name="register" value="Add User" class="btn btn-primary btn-lg">
					</div>
				</form>
			</div>
			
		</div>
	</div>
	</section>
</body>
</html>
