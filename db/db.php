<?php

$db_url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$db_server = $db_url["host"];
$db_username = $db_url["user"];
$db_password = $db_url["pass"];
$db = substr($db_url["path"], 1);

$conn = new mysqli($db_server, $db_username, $db_password, $db);

echo $conn;
?>