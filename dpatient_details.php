<!DOCTYPE html>
<?php include("dfunc.php");?>
<html>
<head>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	  <title>PATIENT INFO</title>
</head>
<body>
	<div class="container">
		<div class="card">
		<div class="card-body" style="background-color:#85C1E9 ">
			<div class="row">
				<div class="col-md-1">
			<a href="dadmin_panel.php" class="btn btn-light"> Go Back </a>

		</div>
		
		<div class="col-md-11" style="text-align: right">
			<a href="docindex.php" class="btn btn-light"> LOG OUT </a>
			
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
			<form class="form-group" action="dpatient_search.php" method="post">
				<div class="row">
				<div class="col-md-10"><input type="text" name="search" class="form-control" placeholder="Enter contact" required autofocus></div>
				<div class="col-md-2"><input type="submit" name="patient_search_submit" class="btn btn-light" value="Search"></div></div>
			</form>
	</div>
</div>
</div>
	<div class="card-body" style="background-color:;color:blue;">
	<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col"><h5>User Name</h5></th>
      <th scope="col"><h5>Email Id</h5></th>
      <th scope="col"><h5>Contact</h5></th>
      
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