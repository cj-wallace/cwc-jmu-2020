<!DOCTYPE html >
<html>
<head>
	<title>Admin Login</title>
</head>
<body>
	<div>
		<h3>Login Form</h3>
		<form id="login-form" method="post" action="form.php">
			<label for="user_id">User Name</label>
			<input type="text" name="user_id" id="user_id">
			<br>
			<label for="user_pass">Password</label>
			<input type="password" name="user_pass" id="user_pass"></input>
			<br>
			<input type="submit" value="Submit" />
			<input type="reset" value="Reset"/>
		</form>
	</div>
</body>
</html>