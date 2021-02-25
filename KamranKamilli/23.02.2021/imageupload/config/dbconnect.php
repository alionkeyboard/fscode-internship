<?php
define('DB_SERVER', "localhost");
define('DB_USERNAME', "root");
define('DB_PASSWORD',"LifeBetterWithCode");
define('DB_NAME', "23.02.2021");

$db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_NAME);
if($db->connect_errno)
{
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>