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

	// query database for user
	$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);

	// check if user exists
	if (mysqli_num_rows($result) > 0) {
		header("Location: hi.html");
	} else {
		echo "Invalid login!";
	}

	mysqli_close($conn);
?>
