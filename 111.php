<?php


$con=mysqli_connect("localhost","root","","pmsdb");

if(isset($_POST['p_sub']))
{
	$email=$_POST['email'];

	$query="DELETE FROM doctorapp where email='$email'";
	$result=mysqli_query($con,$query);

	if($result)

		header("Location:deletepatient.php");
}

function display_p()
{
	global $con;
	$query="select * from doctorapp";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$email=$row['email'];
		echo '<option value="'.$email.'">'.$email.'</option>';
	}
	}



?>

