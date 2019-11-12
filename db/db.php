<?php

$db_url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$db_server = $db_url["host"];
$db_username = $db_url["user"];
$db_password = $db_url["pass"];
$db = substr($db_url["path"], 1);

$connection = new mysqli($db_server, $db_username, $db_password, $db);

if ($connection->connect_errno) {
        echo "Failed to connect to MySQL: (" . $connection->connect_errno . ") " . $connection->connect_error;
    } else {
        printf("Connected Successfully");
    }
?>