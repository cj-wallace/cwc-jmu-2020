<?php
$db_url = parse_url(getenv("CLEARDB_DATABASE_URL"));

print_r($db_url);
if($db_url["path"] == null){
    echo "null";
    $db_server = $db_url["host"];
    $db_username = $db_url["user"];
    $db_password = $db_url["pass"];
    $db = substr($db_url["path"], 1);
}

$db_server = $db_url["host"];
$db_username = $db_url["user"];
$db_password = $db_url["pass"];
$db = substr($db_url["path"], 1);

echo $db_server . $db_username . $db_password . $db;

date_default_timezone_set('America/New_York');
$db_date = date(DATE_RSS);

$connection = new mysqli($db_server, $db_username, $db_password, $db);

$db_connection_status = null;

if ($connection->connect_errno) {
        $db_connection_status = "Failed to connect to MySQL: (" . $connection->connect_errno . ") " . $connection->connect_error;
    } else {
        $db_connection_status = "Connected Successfully";
    }
?>