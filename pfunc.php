<?php
$con=mysqli_connect("localhost","root","","pmsdb");




if(isset($_POST['pat_submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];

	
	$query="insert into doctorapp(username,password,email,contact)values('$username','$password','$email','$contact')";
	$result=mysqli_query($con,$query);
	if($result)

	{
		echo "<script>alert('Registered Done.')</script>";
		echo "<script>window.open('patientbook.php','_self')</script>";	

	}
}




?>