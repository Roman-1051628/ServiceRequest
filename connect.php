<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registratie succesvol</title>
	<style>
        body{
            font-size: 30px;
			background-image: url("depoverzicht.jpg");
            background-repeat: no-repeat;
            background-size: 100%;
        }

		h1{
			color: black;
    		font-size: 200%;
			text-align: center;
			font-family: monospace;
    		text-shadow: 0px 0px 25px black
		}
    </style>
</head>
<body>
	<h1>Service is aangevraagd!</h1>
	
	<?php

	$fullName = $_POST['fullName'];
	$nummer = $_POST['nummer'];
	$company = $_POST['company'];
	$problem = $_POST['problem'];
	$urgentie = $_POST['urgentie'];
	$details = $_POST['details'];

	// Database connection
	$conn = new mysqli('localhost','root','','dep');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("INSERT Into test(fullname, nummer, company, problem, urgentie, details) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sissss", $fullName, $nummer, $company, $problem, $urgentie, $details);
		$stmt->execute();
		$stmt->close();
		$conn->close();
	}
?>
</body>
</html>
