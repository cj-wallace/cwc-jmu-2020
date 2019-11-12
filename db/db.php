<?php
$db_url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$db_server = $db_url["host"];
$db_username = $db_url["user"];
$db_password = $db_url["pass"];
$db = substr($db_url["path"], 1);

$connection = new mysqli($db_server, $db_username, $db_password, $db);

$db_connection_status;

if ($connection->connect_errno) {
        $db_connection_status = "Failed to connect to MySQL: (" . $connection->connect_errno . ") " . $connection->connect_error;
    } else {
        $db_connection_status = "Connected Successfully";
    }
?>