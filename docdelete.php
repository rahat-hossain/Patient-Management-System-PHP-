
<?php
$con=mysqli_connect("localhost","root","","pmsdb");


if(isset($_POST['doc_sub']))
{
	$name=$_POST['name'];

	$query="DELETE FROM doctb where name='$name'";
	$result=mysqli_query($con,$query);

	if($result)

		header("Location:deletedoc.php");
}


?>

