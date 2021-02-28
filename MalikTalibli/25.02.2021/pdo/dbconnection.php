<?php 

	try {

		$db = new PDO("mysql:host=localhost;dbname=pdo",'root','lenkeran42');
		
	} catch (Exception $e) {

		echo $e->getMessage();

	}



 ?>