
<?php
$con=mysqli_connect("localhost","root","","pmsdb");


if(isset($_POST['doc_sub1']))
{
	$name=$_POST['name'];

	$query="insert into doctb(name)values('$name')";
	$result=mysqli_query($con,$query);
	if($result)

		header("Location:adddoc.php");
}

?>

