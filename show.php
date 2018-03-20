<?php 
	require 'dbc.php';
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Show Records</title>
</head>
<body>

	<h1>All Students' Records </h1>

	<p><a href="index.html">Back to Home</a></p>

	<table border="1" cellspacing="2" cellpadding="8">
		<thead>
			<tr>
				<th>#</th>
				<th>Name</th>
				<th>Email</th>
				<th>Roll No</th>
				<th>Adderss</th>
				<th colspan="2">Action</th>
			</tr>
		</thead>
		<tbody>

			<?php 

				$sql = "SELECT * FROM students";

				$result = mysqli_query($conn, $sql)
							or die("Error in fetching records");

				while ($row = mysqli_fetch_assoc($result)): ?>
					<tr>
						<td><?php  echo $row['id']; ?></td>
						<td><?php  echo $row['name']; ?></td>
						<td><?php  echo $row['email']; ?></td>
						<td><?php  echo $row['roll']; ?></td>
						<td><?php  echo $row['address']; ?></td>
						<td><a href="update.php?id=<?php echo $row['id']; ?>">Update</a></td>
						<td><a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
					</tr>

				<?php endwhile ?>
			
		</tbody>
	</table>

</body>
</html>