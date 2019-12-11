<?php
$con=mysqli_connect("localhost","root","","pmsdb");




if(isset($_POST['pat_submit1']))
{
	$contact=$_POST['contact'];
	$docapp=$_POST['docapp'];
	
	
	$query="update doctorapp set docapp='$docapp' where contact='$contact';";
	$result=mysqli_query($con,$query);
	if($result)
	{
		echo "<script>alert('Appoinment registered, Payment: 1000 taka')</script>";
		echo "<script>window.open('patientbook.php','_self')</script>";	

	}
}

?>

