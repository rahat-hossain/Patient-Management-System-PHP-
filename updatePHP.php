


<?php
$con=mysqli_connect("localhost","root","","pmsdb");
if(isset($_POST['update_data']))
{
	$email=$_POST['email'];
	$status=$_POST['status'];
	$query="update doctorapp set payment='$status' where email='$email';";
	$result=mysqli_query($con,$query);
	if($result)
		header("Location:update.php");
}

?>