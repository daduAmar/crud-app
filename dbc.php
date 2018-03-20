<?php 
	
	define('DB_HOST', "localhost");
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'amar');
	define('DB_NAME', 'name_record');
	
	$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

	if (mysqli_connect_errno()) {
		echo "Error in connecting to the database" .  mysqli_connect_error();

		exit();
	}
	
 ?>