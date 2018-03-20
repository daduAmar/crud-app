<!DOCTYPE html>
<html>
<head>
	<title>Insert Record</title>
</head>
<body>

    <h1>Enter Student's Details</h1>
    <p>
        <a href="index.html"> Back to Home </a>
    </p>

    <form action="insert_script.php" method="post">
        <div>    
             <label>Name: </label>
             <input type="text" name="name" placeholder="Enter name">
        </div>
        <br>
        <div>
             <label>Email: </label>
             <input type="email" name="email" placeholder="Enter email">
        </div>
        <br>
        <div>
             <label>Roll No: </label>
             <input type="number" name="roll" placeholder="Enter roll no">
        </div>
        <br>
        <div>
             <label>Address: </label>
             <textarea name="address" placeholder="Enter address"></textarea>
        </div>
        <br>

        <button type="submit" name="submit">Add Record</button>	
    </form>
    <br>
    <br>

</body>
</html>