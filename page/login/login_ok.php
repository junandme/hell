<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login check</title>
</head>
<body>
	<?php

		$servername = "localhost";
		$username = "root";
		$password = "quf254";
		$dbname = "test";

		session_start();
		

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
 	   		die("Connection failed: " . $conn->connect_error);
		} 

		extract($_POST);



		$sql = "SELECT id and name from user where id='$login_id' and password='$login_pw' ";
 
		$result = mysqli_query($conn,$sql);
 
		$row = mysqli_fetch_assoc($result);
	
		$count=mysqli_num_rows($result);



		if($count===1){
			
			$_SESSION['login_user']=$row[name];

			echo "<meta http-equiv='refresh' content='0;url=../../main.html'>";
		}
		else{
			
			echo "<meta http-equiv='refresh' content='0;url=../../index.html'>";
			echo "<script>    alert('id 또는 password가 틀렸습니다.'); </script>";
		}
		
		

		$conn->close();



	?>
	
</body>
</html>
