<!DOCTYPE html>
<?php include("ppfunc.php");?>
<html>
<head>
	<title>Patient Details</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<div class="card">
		<div class="card-body" style="background-color:#85C1E9 ">
			<div class="row">
				<div class="col-md-1">
			<a href="admin-panel.php" class="btn btn-light"> Go Back </a>
		</div>
		
		<div class="col-md-11" style="text-align: right">
			<a href="allsignup.php" class="btn btn-light"> LOG OUT </a>
			
	</div>
</div>
</div>

		<div class="jumbotron" style="background:url('images/C.png') no-repeat;background-size:cover; height:400px;"></div>
	<div class="container">
		<div class="card">
		<div class="card-body" style="background-color:#5DADE2;color:#ffffff;">
			<div class="row">
				
		<div class="col-md-3"><h3>Patient Details</h3></div>
		<div class="col-md-8">
			<form class="form-group" action="patient_search.php" method="post" >
				<div class="row">
				<div class="col-md-10"><input type="text" name="search" class="form-control" placeholder="Enter contact" required ></div>
				<div class="col-md-2"><input type="submit" name="patient_search_submit" class="btn btn-light" value="Search"></div></div>
			</form>
	</div>
</div>
</div>
	<div class="card-body" style="background-color:#5DADE2;color:#ffffff;">
	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">User Name</th>
      <th scope="col">Email id</th>
      <th scope="col">Contact</th>
      <th scope="col">Doctor Appoinment</th>
      <th scope="col">Doctor Appoinment Time</th>
       <th scope="col">Payment</th>
    </tr>
  </thead>
  <tbody>
    <?php get_patient_details(); ?>
  </tbody>
</table>
</div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>