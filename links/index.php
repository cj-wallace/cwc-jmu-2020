<?php
	include("include/config.php");
	
	if ($connection->connect_errno) {
		printf("Connect failed: %s\n", $connection->connect_error);
		exit();
	}
	$query = "SELECT * FROM link";
	if ($results = $connection->query($query)) {
		printf("%d Links.\n", $results->num_rows);
		while($result = $results->fetch_assoc()) {
			printf("
				<ul id='%s'>
					<li class='title'><b>Title:</b> %s</li>
					<li class='link'><b>Link:</b> %s</li>
					<li class='link_img'><b>Link Image:</b> %s</li>
					<li class='type'><b>Type:</b> %s</li>
				</ul>",
				$result["id"],
				$result["title"],
				$result["link"],
				$result["link_img"],
				$result["type"]);
		}
		/* free result set */
		$results->close();
	}
?>