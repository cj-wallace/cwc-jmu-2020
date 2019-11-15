<?php include("../include/config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<?php include(PATH_ROOT . "/include/head.php");?>
</head>
<body>

	<?php include(PATH_ROOT . "/include/navigation.php");?>

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

	<div>
		<h2>Registration Form</h2>

    <form action="registration_form.php" method="POST"> 
			First name: <input type="text" name="firstname">
			<br> 
			Last name: <input type="text" name="lastname"> 
			<input type="hidden" name="form_submitted" value="1" /><input type="submit" value="Submit">
    </form>
	</div>

	<?php include(PATH_ROOT . "/include/footer.php");?>

</body>
</html>