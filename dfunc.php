<?php
$con=mysqli_connect("localhost","root","","pmsdb");


function get_patient_details(){
	global $con;
	$query="select * from doctorapp";
	$result=mysqli_query($con,$query);
	while ($row=mysqli_fetch_array($result)){
	$username=$row['username'];
	$email=$row['email'];
	$contact=$row['contact'];
	


	echo "<tr>

      <td>$username</td>
     
      <td>$email</td>
      <td>$contact</td>


    </tr>";
	
	}


}
?>