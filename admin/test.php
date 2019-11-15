<?php  
	include("../include/config.php");

	if (isset($_POST['Submit'])){
		// if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
		// Assigning POST values to variables.
		$username = $_POST['user_id'];
		$password = $_POST['user_pass'];

		// CHECK FOR THE RECORD FROM TABLE
		$query = "SELECT * FROM `admin` WHERE username='$username' AND password='$password'";
		 
		$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
		$count = mysqli_num_rows($result);

		if ($count == 1){
				printf "<script type='text/javascript'>alert('Login Credentials verified')</script>";
			}else{
				printf "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
			}
	}
?>

<!DOCTYPE html >
<html>
	<head>
		<title>Admin Login</title>
	</head>
<body>
	<div>
		<h3>Login Form</h3>
		<form id="login-form" method="post" action="<?=$_SERVER['PHP_SELF'];?>" >
			<label for="user_id">User Name</label>
			<input type="text" name="user_id" id="user_id">
			<label for="user_pass">Password</label>
			<input type="password" name="user_pass" id="user_pass"></input>
			<input type="submit" value="Submit" />
			<input type="reset" value="Reset"/>
		</form>
	</div>
</body>
</html>