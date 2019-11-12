<?php include("../include/config.php"); ?>
<!DOCTYPE html>
<html>
<head>
	<?php include("../include/head.php");?>
</head>
<body>

<?php include("../include/navigation.php");?>

<div class="container" id="main-content">
	
</div>

<?php include("../include/footer.php");?>

</body>
</html>

<?php	
	function displayQuery() {
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
	}
?>