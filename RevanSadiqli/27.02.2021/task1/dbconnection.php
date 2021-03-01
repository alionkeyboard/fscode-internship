<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "fileupload";

    try {
    $dbconnection = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

    $dbconnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    } catch(PDOException $e) {
      echo $e->getMessage();
    }

?>