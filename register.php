<?php
	// connect to database
	$host = "localhost";
	$username = "your_username";
	$password = "your_password";
	$dbname = "your_database";
	$conn = mysqli_connect($host, $username, $password, $dbname);

	// check connection
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// get form data
	$username = $_POST['username'];
	$password = $_POST['password'];

	// insert data into database
	$sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
	if (mysqli_query($conn, $sql)) {
		echo "Sign up successful!";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}

	mysqli_close($conn);
?>
