<?php
define('DB_SERVER', "localhost");
define('DB_USERNAME', "root");
define('DB_PASSWORD',"LifeBetterWithCode");
define('DB_NAME', "vkontakte");

$db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD,DB_NAME);
if($db->connect_errno)
{
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}

?>