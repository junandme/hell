<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Send</title>
	
</head>
<body>
	<?php
		session_start();

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




		$sql = "INSERT INTO send (title ,content,senddate,sender,rec,readcheck)

		VALUES ('$title','$article', NOW() ,'{$_SESSION['login_id']}','admin',0)";

		if ($conn->query($sql) === TRUE) {
			echo "<meta http-equiv='refresh' content='0;url=/page/main/main.php'>";
    			echo "<script>    alert('send!.'); </script>";
		} else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();



	?>
	
</body>
</html>
