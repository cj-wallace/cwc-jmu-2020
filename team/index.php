<?php
include '/db/db.php';

query();


function query () {
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
										<li class='f_name'><b>FName:</b> %s</li>
										<li class='l_name'><b>LName:</b> %s</li>
										<li class='email'><b>Email:</b> %s</li>
									</ul>",
									$result["id"], $result["first_name"], $result["last_name"], $result["email"]);
            }
            /* free result set */
            $results->close();
        }
		}

?>