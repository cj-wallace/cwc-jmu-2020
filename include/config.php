<?php
	require("db/db.php");

	define("PATH_ROOT", $_SERVER["DOCUMENT_ROOT"]);

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