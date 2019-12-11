

<!DOCTYPE html>
<html>
</body>
</html>
<head>
	<title>Patient Details</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>


<body>
<?php
include("dfunc.php");
if(isset($_POST['patient_search_submit'])){

	$contact=$_POST['search'];

	$query="select * from doctorapp where contact='$contact'";
	$result=mysqli_query($con,$query);
	echo "<div class='container-fluid' style='margin-top:50px';>
		<div class='card'>
		<div class='card-body' style='background-color:#D6EAF8'>
			<div class='row'>
				<div class='col-md-1'>
			<a href='dpatient_details.php' class='btn btn-light'> Go Back </a>

		</div>
		
		<div class='col-md-11' style='text-align: right'>
			<a href='allsignup.php' class='btn btn-light'> LOG OUT </a>
			
	</div>
</div>
</div>

	<img src='images/3.jpg' class='card-img-top'>
	<div class='card-body' style='background-color:#3498DB;color:#ffffff;'>
	<table class='table table-hover'>
  <thead>
    <tr>
      <th>User Name</th>
      
      <th>Email id</th>
      <th>Contact</th>
      <th>Payment</th>
    </tr>
  </thead>
  <tbody>
  ";

	while ($row=mysqli_fetch_array($result)){
	$username=$row['username'];
	$email=$row['email'];
	$contact=$row['contact'];
	$payment=$row['payment'];
	echo "<tr>
   
      <td>$username</td>
     
      <td>$email</td>
      <td>$contact</td>
      <td>$payment</td>
    </tr>";
	}
	echo "</tbody></table></div></div></div>";
}


?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
