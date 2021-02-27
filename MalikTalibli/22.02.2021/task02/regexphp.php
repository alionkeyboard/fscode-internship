<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		
		<a href="regexhtml.php"><button type="submit" class="btn btn-primary">Geri</button></a>

	</div>	
	<div class="container">


<?php 
	session_start();

	if (isset($_POST)) {

		$pattern = $_POST['pattern'];
		$text = $_POST['text'];

		$pregmatch = preg_match_all($pattern, $text, $matches);

		if ($pregmatch) {

			foreach ($matches as $match) {

				foreach ($match as $value) {

					echo $value."<br>";
				}
			}
		}else{

			$_SESSION['alert'] = true;
			header('Location:regexhtml.php');

		}
	}

 ?>

 </div>
</body>
</html>