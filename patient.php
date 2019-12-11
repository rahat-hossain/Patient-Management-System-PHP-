<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>REGISTRATION PAGE</title>
</head>
<body>

	<br>
	<div class="container">
		<div class="card">
		<div class="card-body" style="background-color:#D6EAF8">
			<div class="row">
				<div class="col-md-1">
			<a href="index.php" class="btn btn-light"> Go Back</a>

		</div>
		
		<div class="col-md-11" style="text-align: right">
			<a href="allsignup.php" class="btn btn-light"> LOG IN </a>
			
	</div>
</div>
</div>


  
		<div class="card-body" style="background-color:#3498DB;color:#ffffff;text-align: center;">
		  <h1>Patient Registration</h1>
	</div>
		<div class="card-body">

			<form class="form-group" action="pfunc.php" method="POST">
				<label>User Name: </label>
				<input type="text" name="username" class="form-control" placeholder="First and last name" required autofocus><br>
				<label>Password: </label>
				<input type="text" name="password" class="form-control" placeholder="Eg. aA@13ss" required ><br>
				<label>Email id: </label>
				<input type="email" name="email" class="form-control" placeholder="example@domain.com" required ><br>
				<label>Contact: </label>
				<input type="text" name="contact" class="form-control" placeholder="Eg. +880111689" required ><br>

				<input type="submit" class="btn btn-primary" name="pat_submit" value="Register">
				
			</form><br>
		</div>
</div>
<br>

<div class="col-md-1"></div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>