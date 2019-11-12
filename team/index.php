<?php
	include '../db/db.php';

	global $connection;
	date_default_timezone_set('America/New_York');
	$today = date(DATE_RSS);
	$query = "select * from member";
	if ($connection->connect_errno) {
		printf("Connect failed: %s\n", $connection->connect_error);
		exit();
	}
	if ($results = $connection->query($query)) {
		printf("Select returned %d rows.\n", $results->num_rows);
		while($result = $results->fetch_assoc()) {
			printf("
				<ul id='%s'>
					<li class='name'><b>Name:</b> %s %s</li>
					<li class='email'><b>Email:</b> %s</li>
					<li class='major'><b>Major:</b> %s</li>
					<li class='age'><b>Age:</b> %s</li>
					<li class='grad_year'><b>Graduation Year:</b> %s</li>
					<li class='bio'><b>Bio:</b> %s</li>
					<li class='profile_img'><b>Image:</b> %s</li>
				</ul>",
				$result["id"],
				$result["first_name"],
				$result["last_name"],
				$result["email"],
				$result["major"],
				$result["age"],
				$result["grad_year"],
				$result["bio"],
				$result["profile_img"]);
		}
		/* free result set */
		$results->close();
	}
?>