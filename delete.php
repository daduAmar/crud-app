
<?php 
	require 'dbc.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Delete Record</title>
</head>
<body>

	<?php
		if (isset($_GET['submit'])) {
			# Delete the record

			$ans = $_GET['ans'];
			$id = $_GET['id'];

			if($ans === 'y') {
				$sql = "DELETE FROM students WHERE id=$id";

				mysqli_query($conn, $sql) 
					or die('Error deleting record');
			}
			
			header("Location: show.php");

		}
		else {
			// Show the record
			$id = $_GET['id'];
			$sql = "SELECT * FROM students WHERE id=$id";

			$result = mysqli_query($conn, $sql) 
			            or die('Error retrieving data');

			$row = mysqli_fetch_assoc($result); 

		}
	 ?>

	 <p>
	 	<strong>Name: </strong>
	 	<?php echo $row['name']; ?>
	 </p>
	 <p>
	 	<strong>Email: </strong>
	 	<?php echo $row['email']; ?>
	 </p>
	 <p>
	 	<strong>Roll: </strong>
	 	<?php echo $row['roll']; ?>
	 </p>
	 <p>
	 	<strong>Address: </strong>
	 	<?php echo $row['address']; ?>
	 </p>
	 <br>
	 <br>

	 <h2>Do you want to delete this record?</h2>

	 <form method="GET" acction="<?php echo $_SERVER['PHP_SELF'] ?>">
	 	<div>
	 		<input type="radio" name="ans" value="y"> Yes
	 		<input type="radio" name="ans" value="n" checked="checked"> No
	 	</div>

	 	<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

	 	<br>

	 	<button type="submit" name="submit"> OK </button>
	 </form>


</body>
</html>