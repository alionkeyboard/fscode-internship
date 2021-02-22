<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="views/style.css">
		<title>Document</title>
	</head>
	<body>
		<form action="" method="post" class="form-group">
			<div class="form-row align-items-center">
				<input type="text" class="form-control mb-2" name="pattern"placeholder="Insert your regular expression here" value="<?php if (isset( $pattern ) ) echo $pattern?>" required>
				<label for="text"></label>
				<textarea name="text" cols="30" rows="10" placeholder="write text here" class="form-control" required></textarea>
				<button type="submit" class="btn btn-primary">SUBMIT</button>
			</div>
		</form>

		<?php if ( isset( $matches ) && count( $matches[ 0 ] ) >= 1 ):?>
		<div class="alert alert-success"><?php echo $text ?></div>
		<?php elseif( isset( $text ) ):?>
		<div class="alert alert-danger">Axtardığınız regexə uyğun nəticə tapılmadı</div>
		<?php endif;?>
	</body>
</html>