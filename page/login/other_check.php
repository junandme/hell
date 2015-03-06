<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>join check</title>
</head>
<body>
	<?php
		$servername = "54.64.212.73";
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




		$sql1 = "update user set email='$new_email' ";
		$sql2 = "update user set name='$new_name' ";
		$sql3 = "update user set pone='$new_pone' ";


		if ($conn->query($sql1) === TRUE&&$conn->query($sql2) === TRUE&&$conn->query($sql3) === TRUE) {
			echo "<meta http-equiv='refresh' content='0;url=../../index.php'>";
    			echo "<script>    alert('$new_name'+'change info.'); </script>";
		} else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();



	?>
	
</body>
</html>
