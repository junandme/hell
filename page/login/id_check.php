<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ID check</title>
	<link rel="stylesheet" href="../../assets/css/bootswatch.min.css">
	<link rel="stylesheet" href="../../css/bootstrap.css" media="screen">

	<script>
	

<<<<<<< HEAD
	function send_null(){


		window.opener.document.getElementById('p_id').value='';
		window.opener.document.getElementById('p_id').focus();
		window.opener.document.getElementById('sub').disabled=true;
		self.close();
	}

	function send_ok(){
		window.opener.document.getElementById('sub').disabled=false;
		self.close();
=======
	function send(){


		window.opener.document.getElementById('p_id').value='';
		window.opener.document.getElementById('p_id').focus();
		self.close();
		
		
>>>>>>> branch 'master' of https://github.com/junandme/hell.git
	}

	</script>
</head>
<body>
	<div class="container">
		<div class="col-lg-6 col-lg-offset-3" style="text-align:center;">
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
				echo '<div class="alert alert-dismissable alert-warning">
				<h4>Warning!</h4>
				<p>'.$new_id.' 는 이미존재하는 아이디 입니다.</p>
				</div>';
				#echo "$new_id 는 이미존재하는 아이디 입니다.";
<<<<<<< HEAD
				echo '<input  class="btn btn-defualt" type="button" name="button" value="close" onclick="send_null();">';
=======
				echo '<input  class="btn btn-defualt" type="button" name="button" value="close" onclick="send();">';
>>>>>>> branch 'master' of https://github.com/junandme/hell.git
				
			}
			else{
				echo '<div class="alert alert-dismissable alert-success">
				<h4>Well done!</h4>
				<p>'.$new_id.' 는 사용가능한 아이디 입니다.</p>
				</div>';
				#echo "$new_id 는 사용가능합니다.";
<<<<<<< HEAD
				echo '<input  class="btn btn-defualt" type="button" name="button" value="close" onclick="send_ok();">';
=======
				echo '<input  class="btn btn-defualt" type="button" name="button" value="close" onclick="self.close();">';
>>>>>>> branch 'master' of https://github.com/junandme/hell.git
				
			}
			

			$conn->close();
			?>



		</div>
	</div>
	
</body>
</html>
