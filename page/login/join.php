<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>회원가입!</title>
</head>
<body>
	<form action="join_check.php" method="post">
		<table>
			<tr>
				<td>id</td>
				<td><input type="text" name='new_id'></td>
				<td><input type="submit" value="ID check"></td>
			</tr>
			<tr>
				<td>password</td>
				<td><input type="password" name="new_pw"></td>			
			</tr>
			<tr>
				<td>name</td>
				<td><input type="text" name='new_name'></td>
			</tr>
			<tr>
				<td></td><td><input type="submit" value='join'></td>
			</tr>
		</table>
	</form>
	
	
</body>
</html>
