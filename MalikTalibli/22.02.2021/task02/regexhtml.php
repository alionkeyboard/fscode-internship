<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="raw">
			<?php 
			session_start();
			if(isset($_SESSION['alert']) and $_SESSION['alert']==true){ echo '<div class="alert alert-warning" role="alert">
  Axtardığınız regexə uyğun nəticə tapılmadı!
</div>';
session_destroy();
} 

?>
			<form method="POST" action="regexphp.php">
			  <div class="form-group">
			    <label for="formGroupExampleInput">Pattern</label>
			    <input type="text" name="pattern" class="form-control" id="formGroupExampleInput" placeholder="Pattern daxil edin">
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput2">Metn daxil edin</label>
			    <textarea class="form-control" name="text" id="formGroupExampleInput2" placeholder="Another input"></textarea>
			  </div>
			  <button type="submit" class="btn btn-primary">Axtar</button>
			</form>
		</div>
	</div>
</body>
</html>