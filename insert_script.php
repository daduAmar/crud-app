<?php 

if (isset($_POST['submit'])) {

	require 'dbc.php';

	$name = $_POST['name'];
	$email = $_POST['email'];
	$roll = $_POST['roll'];
	$address = $_POST["address"];

	$sql = "INSERT INTO students(name, email, roll, address) VALUES('$name', '$email', $roll, '$address')";

	if(mysqli_query($conn, $sql) === false) {
		echo mysqli_error($conn);

		include 'insert.php';
	}
	else {

		// Close connection
		mysqli_close($conn);

		header("Location: show.php");
	}
}