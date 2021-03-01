<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<link rel="stylesheet" href="views/style.css">

		<title>LoginToVK</title>
	</head>
	<body>
		<form action="" method="post">
			<div class="form=group">
				<label>
					<input type="text" name="login" class="form-control" placeholder="email or number" required>
				</label>
			</div>
			<div class="form=group">
				<label>
					<input type="password" name="password" class="form-control" placeholder="password" required>
				</label>
			</div>
			<br><button type="submit" class="btn btn-primary">SUBMIT</button>
			<button type="submit" id="Auth" class="btn btn-secondary">Auth</button>
		</form>
		<form action="" method="post">
			<div class="form-group">
				<label>
					<textarea name="url" class="form-control" placeholder="write url here" required></textarea>
				</label>
			</div>
			<button type="submit" name="allSubmit" class="btn btn-success">allSubmit</button>
		</form>
		<script type="text/javascript" src="views/js/auth.js"></script>
		<script>
			( function ( $ )
			{
				$( 'button[id=Auth]' ).on( 'click', function () {
					window.open( '<?php echo $url?>', 'MsgWindow', 'width=200,height=100');} );
			} ) ( jQuery );
		</script>
	</body>
</html>