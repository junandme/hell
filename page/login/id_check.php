<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ID check</title>
	<link rel="stylesheet" href="../../assets/css/bootswatch.min.css">
	<link rel="stylesheet" href="../../css/bootstrap.css" media="screen">
</head>
<body>
	<div class="col-lg-6 col-lg-offset-3" style="margin: auto">
	<?php
		$new_id=$_GET['new_id'];
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

		
		

		$sql = "SELECT id from user where id='$new_id'  ";
 
		$result = mysqli_query($conn,$sql);
 
		$row = mysqli_fetch_assoc($result);
	
		$count=mysqli_num_rows($result);



		if($count===1){
			
			

			echo "$new_id 는 이미존재하는 아이디 입니다.";

			
		}
		else{
			
			

			echo "$new_id 는 사용가능합니다.";
		}

		echo '<br><br><br><input  class="btn btn-primary" type="button" name="button" value="close" onclick="self.close();">';
		
		
		

		$conn->close();



	?>
</div>
	
</body>
</html>
