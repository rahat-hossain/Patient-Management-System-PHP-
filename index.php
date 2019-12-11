<!DOCTYPE html>
<html>
<head>
	  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>PATIENT MANAGEMENT SYSTEM</title>
	<style type="text/css">

		body {

	 margin: 0;
	 padding: 0;
	 background: url(images/A.jpg) no-repeat;
	 background-size: 120%;
	 font-family: sans-serif;
}


.box1 {
	position: absolute;
	top: 10%;
	left: 50%;
	transform: translate(-50%,-50%);
	width: 1200px;
	height: 50px;
	box-sizing: border-box;
	background: rgb(51, 204, 255);
	box-shadow: 2px 2px 2px 2px #5D6D7E;
}


.box3 {
	position: absolute;
	top: 50%;
	left: 60%;
	transform: translate(-50%,-50%);
	width: 190px;
	height: 100px;
	box-sizing: border-box;
	background: white;
	box-shadow: 2px 2px 2px 2px #5D6D7E;
}


.box {
	position: absolute;
	top: 50%;
	left: 40%;
	transform: translate(-50%,-50%);
	width: 190px;
	height: 100px;
	box-sizing: border-box;
	background: white;
	box-shadow: 2px 2px 2px 2px #5D6D7E;
}



.user {
	width: 120px;
	height: 120px;
	border-radius: 50%;
	overflow: hidden;
	position: absolute;
	top: calc(-200px/2);
	left: calc(45% - 50px);

}

h2 {
	 margin: 0;
	 padding: 7px;
	 color: rgb(51, 204, 255);
	 text-align: center;
	}

	

h3 {
	 margin: 0;
	 padding: 15px;
	 color: white;
	 text-align: center;
	}

	</style>

</head>
<body>

<div class="box1">
<h3>PATIENT MANAGEMENT SYSTEM</h3>
</div>
	<div class="box">

		<img src="images/r.png" class="user"><br>
		<a href="patient.php"><h2>PATIENT REGISTRATION</h2></a>
	</div>

	

	<div class="box3">

    	<img src="images/s.png" class="user"><br>
		<a href="allsignup.php"><h2>LOG IN</h2></a>

	</div>


</body>
</html>