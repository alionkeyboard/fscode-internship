<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<div class="raw">
			<form method="POST" action="core.php">
			  <div class="form-group">
			    <label for="formGroupExampleInput">Şifrə</label>
			    <input type="text" name="sifre" class="form-control" id="formGroupExampleInput" placeholder="Pattern daxil edin">
			  </div>
			  <div class="form-group">
			    <label for="formGroupExampleInput2">Metn</label>
			    <textarea class="form-control" name="metn" id="formGroupExampleInput2" placeholder="Another input"></textarea>
			  </div>
			  <button type="submit" class="btn btn-primary">Kodlaşdır</button>
			</form>
		</div>
	</div>
</body>
</html>