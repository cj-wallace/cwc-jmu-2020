
<html>
	<body>
		<?php
			 if(isset($_POST['submit']) 
			 {
					printf("First name: " . $_POST['firstname'] . "<br />\n");
					printf("Last name: " . $_POST['lastname'] . "<br />\n");
			 }
		?>
		<form action="form.php" method="post">
			 <p>First name: <input type="text" name="firstname" /></p>
			 <p>Last name: <input type="text" name="firstname" /></p>
			 <input type="submit" name="submit" value="Submit" />
		</form>
	</body>
</html>