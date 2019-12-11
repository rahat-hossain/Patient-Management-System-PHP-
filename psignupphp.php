<?php
$con=mysqli_connect("localhost","root","","pmsdb");

if(isset($_POST['login_submit'])){
	$fname=$_POST['fname'];
	$password=$_POST['password'];
}


$query="select * from doctorapp where fname='$fname' and password='$password'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
	header("Location:patientbook.php");
}
else
{
	echo "<script>alert('Enter login')</script>";
	echo "<script>window.open('psignup.php','_self')</script>";
}



?>