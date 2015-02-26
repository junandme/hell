<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php include 'page/import/head.php'; ?>
</head>
<body>
	<div class="container">
		<!-- <div style="position:absolute; left:20%; right:20%; top:30%;"> -->
		<div class="col-lg-6 col-lg-offset-3" style="margin-top:15%;">
			<div class="logo" align="right" style="padding:2%;">
				<img src="img/logo.png" alt="logo">
			</div>
			<form action="./page/login/login_ok.php" method="post">

				<div class="form-group">
					<input class="form-control" name="login_id" type="text" placeholder="ID" autofocus required>
				</div>			
				<div class="form-group">
					<input class="form-control" name="login_pw" type="PASSWORD" placeholder="PASSWORD" required>
				</div>			
				<div >
					<tr><input type="submit" value='Login' class="btn btn-primary btn-lg btn-block"></tr>
				</div>			
			</form>
			<div class="btn-group btn-group-justified">
			  <a href="page/login/sign_up.php" class="btn btn-default">Sign up</a>
			  <a onclick="alert('죄송합니다. 아이디,비밀번호 찾기는 whdrjs0@gmail.com 으로 문의해 주세요.');" class="btn btn-default" >Id miss</a>
			  <a onclick="alert('죄송합니다. 아이디,비밀번호 찾기는 whdrjs0@gmail.com 으로 문의해 주세요.');" class="btn btn-default">Pw miss</a>
			</div>
		</div>
	</div>
	

	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="assets/js/bootswatch.js"></script>
</body>
</html>
