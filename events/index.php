<?php
	include '../db/db.php';

	global $connection;
	if ($connection->connect_errno) {
		printf("Connect failed: %s\n", $connection->connect_error);
		exit();
	}
	$query = "SELECT * FROM event";
	if ($results = $connection->query($query)) {
		printf("%d Members.\n", $results->num_rows);
		while($result = $results->fetch_assoc()) {
			printf("
				<ul id='%s'>
					<li class='date_start'><b>Start Date:</b> %s</li>
					<li class='date_end'><b>End Date:</b> %s</li>
					<li class='name'><b>Name:</b> %s</li>
					<li class='description'><b>Description:</b> %s</li>
					<li class='link'><b>Link:</b> %s</li>
				</ul>",
				$result["id"],
				$result["date_start"],
				$result["date_end"],
				$result["name"],
				$result["description"],
				$result["link"]);
		}
		/* free result set */
		$results->close();
	}
?>