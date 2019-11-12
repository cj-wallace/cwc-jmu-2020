<?php
	include("include/config.php");
	
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