<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$number = $_POST['number'];

	// Create connection
	// $conn = new mysqli( "sql6.freemysqlhosting.net", "sql6516297", "Twy2yLpSVd" );

	$servername = "sql6.freemysqlhosting.net";
	$database = "sql6516297";
	$username = "sql6516297";
	$password = "Twy2yLpSVd";
	
	$conn = mysqli_connect($servername, $username, $password, $database);
	




	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, gender, email, password, number) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $firstName, $lastName, $gender, $email, $password, $number);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>
