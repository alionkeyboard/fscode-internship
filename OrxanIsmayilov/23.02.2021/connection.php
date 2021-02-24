<?php
$servername = "localhost";
$username = "root";
$password = "";


$conn = null;

$conn = new PDO("mysql:host=$servername",$username,$password);

$db = "CREATE DATABASE Orkhan_i";
$conn->exec($db);

$conn = new PDO("mysql:host=$servername;dbname=Orkhan_i",$username,$password);

$table = "CREATE TABLE images (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    image_url VARCHAR(255) NOT NULL,
    upload_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    
$conn->exec($table);