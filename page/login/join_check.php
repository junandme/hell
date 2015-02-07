<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>join check</title>
</head>
<body>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "quf254";
		$dbname = "test";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
 	   		die("Connection failed: " . $conn->connect_error);
		} 

		extract($_POST);




		$sql = "INSERT INTO user (id, password,pone,sex,email,name)

		VALUES ('$new_id', '$new_pw','$new_pone','$Radios','new_email' ,'$new_name')";

		if ($conn->query($sql) === TRUE) {
    			echo "New record created successfully";
		} else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();



	?>
	
</body>
</html>
