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
	echo "<script>window.open('allsignup.php','_self')</script>";
}



$query="select * from doclogin where username='$username' and password='$password'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
	header("Location:dadmin_panel.php");
}

else
{
	echo "<script>alert('Enter login')</script>";
	echo "<script>window.open('allsignup.php','_self')</script>";
}



$query="select * from doctorapp where username='$username' and password='$password'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
	header("Location:padmin-panel.php");
}
else
{
	echo "<script>alert('Enter login')</script>";
	echo "<script>window.open('psignup.php','_self')</script>";
}

?>