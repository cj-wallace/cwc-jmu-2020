<?php
$db_url = parse_url(getenv("CLEARDB_DATABASE_URL"));

if($db_url["path"] == null){
    $db_server = "us-cdbr-iron-east-05.cleardb.net";
    $db_username = "b8ef108cc8e9cf";
    $db_password = "723ffcfb";
    $db = substr("/heroku_c77a724887dd59a", 1);
}
else{
    $db_server = $db_url["host"];
    $db_username = $db_url["user"];
    $db_password = $db_url["pass"];
    $db = substr($db_url["path"], 1);
}

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