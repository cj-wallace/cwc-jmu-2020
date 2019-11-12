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

	<?php include(PATH_ROOT . "/include/footer.php");?>

</body>
</html>