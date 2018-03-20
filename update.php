<?php 
    require 'dbc.php';
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Update Record</title>
</head>
<body>

    <h1>Update Student's record</h1>

    <?php 
        if (isset($_POST['submit'])) {
            // Update the record

            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];
            $roll = $_POST['roll'];
            $address = $_POST["address"];

            $sql = "UPDATE students SET name='$name', email='$email', roll=$roll, address='$address' WHERE id=$id";

            mysqli_query($conn, $sql) 
                or die('Could not be updated');

            header("Location: show.php");
        }
        else {
            // Show the record

            $id = $_GET['id'];
            $query = "SELECT * FROM students WHERE id=$id";

            $result = mysqli_query($conn, $query) 
                        or die('Error retrieving data');

            $row = mysqli_fetch_assoc($result);

        }
     ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <div>    
             <label>Name: </label>
             <input type="text" name="name" value="<?php echo $row['name']; ?>">
        </div>
        <br>
        <div>
             <label>Email: </label>
             <input type="email" name="email" value="<?php echo $row['email']; ?>">
        </div>
        <br>
        <div>
             <label>Roll No: </label>
             <input type="number" name="roll" value="<?php echo $row['roll']; ?>">
        </div>
        <br>
        <div>
             <label>Address: </label>
             <textarea name="address"><?php echo $row['address']; ?></textarea>
        </div>
        <br>

        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

        <button type="submit" name="submit">Update</button>	
    </form>
    <br>
    <br>
    <p>
        <a href="index.html"> Go to HOME </a>
    </p>

</body>
</html>