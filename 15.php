<?php


$con=mysqli_connect("localhost","root","","pmsdb");

function display_p()
{
	global $con;
	$query="select * from doctorapp";
	$result=mysqli_query($con,$query);
	while($row=mysqli_fetch_array($result))
	{
		$username=$row['username'];
		echo '<option value="'.$username.'">'.$username.'</option>';
	}
	}

?>

