<?php  


if (isset($_POST)) {

	// print_r($_FILES);
	// die();
	
	$fileName = $_FILES['file']['name'];
	$tmpName = $_FILES['file']['tmp_name'];
	$filePath = 'uploads/'.$fileName;
	$upload = move_uploaded_file($tmpName, $filePath);

	if ($upload) {
		
		include('dbconnection.php');

		$up=$db->prepare("INSERT INTO upload(image_url) VALUES(?)");

		if ($up->execute([$fileName])) {

			$url = $db->prepare("SELECT * from upload");
			$url->execute();
			$url->bindColumn('image_url', $img_url);

			while ($row=$url->fetch(PDO::FETCH_BOUND)) {

				echo "$img_url<br>";
			}

		}else{

			echo "error";
			
		}

		
	}
}




?>