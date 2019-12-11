<!DOCTYPE html>
<?php include('14.php');?>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title>PAYMENT/CHECKOUT</title>

</head>
<body>
	<div class="card">
		<div class="card-body" style="background-color:#D6EAF8">
			<div class="row">
				<div class="col-md-1">
			<a href="admin-panel.php" class="btn btn-light"> Go Back </a>
</div>
		<div class="col-md-11" style="text-align: right">
			<a href="allsignup.php" class="btn btn-light"> LOG OUT </a>	
	</div>
</div>
</div>


	<div class="jumbotron" style="background:url('images/3.jpg') no-repeat;background-size:cover; height:300px;"></div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-3">
		<div class="list-group">
		<a href="admin-panel.php" class="list-group-item active" style="background-color:#3498DB;color:#ffffff;border-color: #3498DB">Patients</a>
		<a href="patient_details.php" class="list-group-item">Patient Details</a>
		<a href="payment.php" class="list-group-item">Payment/Checkout</a>
		<a href="doctor.php" class="list-group-item">Doctors Add Section</a>
		<a href="docdeletephp.php" class="list-group-item">Doctors Delete Section</a>
		<a href="patient-delete.php" class="list-group-item">Patient Delete Section</a>
		<a href="p.php" class="list-group-item">Prescription</a>
	</div>
</div>


<div class="col-md-8">
	
        <div class="card">
          <div class="card-body">
            <form class="form-group" method="post" action="updatePHP.php">

            	 <label>Patient name: </label>
          <select class="form-control" name="email" required >

            <?php display_p();?>
          
        </select><br>
          
              <select name="status" class="form-control">
                <option value="paid">Done</option>
                <option value="pay later">Incomplete</option>
              </select><br><hr>
              <input type="submit" value="update" name="update_data" class="btn btn-primary">
            </form>
          </div>
        </div><br><br>
      </div>
                
		</div>
</div>


<div class="col-md-1"></div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>