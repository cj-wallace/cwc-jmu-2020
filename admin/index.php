<?php require("../include/config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<?php include(PATH_ROOT . "/include/head.php");?>
</head>
<body>
	<?php if (!isset($_POST['user_id'])) {?>
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
					
					<p> Image </p>
						<form action="insert_product.php" method="POST" enctype="multipart/form-data">
							<?php 
								$query = "SELECT * FROM member";
								if ($results = $connection->query($query)) {
									printf("<select>");
									while($result = $results->fetch_assoc()) {
										printf("
											<option id='%s'> %s %s</option>",
											$result["id"],
											$result["first_name"],
											$result["last_name"]);
									}
									/* free result set */
									$results->close();
								}
							?>
						
							<label>File: </label><input type="file" name="image" />
							<input type="submit" />
					</form>
					
					<?php
					
					
					
					
					
					
					//printf("<script type='text/javascript'>alert('Login Credentials verified');</script>");
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