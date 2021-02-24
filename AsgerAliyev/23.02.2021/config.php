<?php

//PDO vasitesi ile Database connection-in qurulmasi

$servername = 'localhost';
$username   = 'root';
$password   = '';
$dbname     = 'picture_link_db';

try
{
	$conn = new  PDO("mysql:host=$servername;dbname=$dbname", $username, $password );

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $e)
{
	echo 'Connection failed:' . $e->getMessage();
}
