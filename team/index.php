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
			$query = "SELECT * FROM member";
			if ($results = $connection->query($query)) {
				printf("%d Members.\n", $results->num_rows);
				while($result = $results->fetch_assoc()) {
					printf("
						<ul id='%s'>
							<li class='name'><b>Name:</b> %s %s</li>
							<li class='email'><b>Email:</b> %s</li>
							<li class='major'><b>Major:</b> %s</li>
							<li class='age'><b>Age:</b> %s</li>
							<li class='grad_year'><b>Graduation Year:</b> %s</li>
							<li class='bio'><b>Bio:</b> %s</li>
						</ul>",
						$result["id"],
						$result["first_name"],
						$result["last_name"],
						$result["email"],
						$result["major"],
						$result["age"],
						$result["grad_year"],
						$result["bio"]);
						
						echo '<img width="300" src="data:image/jpeg;base64,'.base64_encode( $result['profile_img'] ).'"/>';
						
						//printf("<img src=\"data:image/png;base64,'.base64_encode(%s).'\">", $result["profile_img"]);
				}
				/* free result set */
				$results->close();
			}
		?>
	</div>

	<?php include(PATH_ROOT . "/include/footer.php");?>

</body>
</html>