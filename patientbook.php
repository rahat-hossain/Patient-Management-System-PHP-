<!DOCTYPE html>
<?php include('1.php');?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

	<br>
<div class="col-md-10">
	
	<div class="col-md-12">
    <div class="card-body" style="background-color: #D6EAF8;text-align:right">
    	<div class="col-md-12">
    		<a href="patient.php" class="btn btn-light"> Go Back </a>
    	</div>	
	</div>
</div>
		<div class="card-body" style="background-color:#3498DB;color:#ffffff;">
		  Book An Appointment

		   <div class="card">
          <div class="card-body">

		    <form class="form-group" method="post" action="patientfix.php">
              <input type="text" name="contact" class="form-control" placeholder="enter contact"><br>
				
				
				<select class="form-control" name="docapp">

						<?php display_docs();?>
					
				</select><br>

			

				<input type="submit" class="btn btn-primary" name="pat_submit1" value="Submit">
			</form>
		</div>
</div>


<div class="col-md-1"></div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>