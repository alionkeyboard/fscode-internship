<?php 
if (isset($_POST['submit'])) {// yazmaq istediyimiz mesaji gonderirik
	
	$ac = fopen('yaz.txt','a');//fayl yaradib a ile yazmaq ucun elave ed.
	$email = $_POST['email']."||";// mailden gelen deyeri deyisene el.ed
	$text = $_POST['message']." <br>";//hemcinin text areadan
	fwrite($ac,$email);//yaratdigimiz fayla mail ve textden gelenleri el. ed
	fwrite($ac, $text);
	fclose($ac); //fayli baglayiriq 
} ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<div style="width: 100%;height: 150px; background-color: gray; color: white;"> 
				<p><?php echo file_get_contents('yaz.txt');?></p>
		</div>

		<div class=" d-flex justify-content-center" style="margin:20px;">
			<form method="POST" action="" class="">
				<input type="email" name="email" class=""><br>
				<textarea name="message"></textarea><br>
				<button class="btn btn-success" type="submit" name="submit"> Send message </button>
			</form>
		</div>
		



	</div>

</body>
</html>