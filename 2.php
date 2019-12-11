<?php
$con=mysqli_connect("localhost","root","","pmsdb");




if(isset($_POST['pat_submit']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$contact=$_POST['contact'];
	$docapp=$_POST['docapp'];

	
	$query="insert into doctorapp(username,password,email,contact,docapp)values('$username','$password','$email','$contact','$docapp')";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script>alert('Appoinment registered, Payment: 1000 taka')</script>";
		echo "<script>window.open('admin-panel.php','_self')</script>";	

	}
}

?>