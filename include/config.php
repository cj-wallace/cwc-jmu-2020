<?php
	include("db/db.php");
	
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/team/index.php":
			$CURRENT_PAGE = "Team"; 
			$PAGE_TITLE = "Team";
			break;
		case "/events/index.php":
			$CURRENT_PAGE = "Events"; 
			$PAGE_TITLE = "Events";
			break;
		case "/links/index.php":
			$CURRENT_PAGE = "Links"; 
			$PAGE_TITLE = "Links";
			break;
		default:
			$CURRENT_PAGE = "Index";
			$PAGE_TITLE = "JMU CWC!";
	}
?>