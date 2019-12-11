<?php
$con=mysqli_connect("localhost","root","","pmsdb");

if(isset($_POST['login_submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
}


$query="select * from logindb where username='$username' and password='$password'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
	header("Location:admin-panel.php");
}
else
{
	echo "<script>alert('Enter login')</script>";
	echo "<script>window.open('index1.php','_self')</script>";
}



?>