<?php require("../include/config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<?php include(PATH_ROOT . "/include/head.php");?>
</head>
<body>
	<?php if (!isset($_SESSION['username'])) {?>
		<div id="admin-login">
			<h3>Login Form</h3>
			<form id="login-form" method="post" action="">
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
	<?php } ?>
	
	<div class="container" id="main-content">
		<?php
			if ($connection->connect_errno) {
				printf("Connect failed: %s\n", $connection->connect_error);
				exit();
			}
			$query = "SELECT * FROM admin";
			if ($results = $connection->query($query)) {
				printf("%d Admins.\n", $results->num_rows);
				while($result = $results->fetch_assoc()) {
					printf("
						<ul id='%s'>
							<li class='username'><b>Username:</b> %s</li>
							<li class='password'><b>Password:</b> %s</li>
						</ul>",
						$result["id"],
						$result["username"],
						$result["password"]);
				}
				/* free result set */
				$results->close();
			}
		?>
	</div>
	
	<div id="admin-page">
		<?php			
			if (isset($_POST['user_id']) and isset($_POST['user_pass'])){
				// Assigning POST values to variables.
				$username = $_POST['user_id'];
				$password = $_POST['user_pass'];

				// CHECK FOR THE RECORD FROM TABLE
				$query = "SELECT * FROM `admin` WHERE username='$username' AND password='$password'";
				 
				$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
				$count = mysqli_num_rows($result);
				
				if ($count == 1){
					printf("<script type='text/javascript'>
						alert('Login Credentials verified');
					</script>");
				}else{
					printf("<script type='text/javascript'>
						alert('Invalid Login Credentials')
					</script>");
				}
			}
		?>
	</div>
</body>
</html>