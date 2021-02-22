<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<link rel="stylesheet" href="views/style.css">
		<title>InstaThief</title>
	</head>
	<body>

		<form action="" method="post" class="form-group">
			<div class="input-group">
				<div class="input-group-prepend">
					<span class="input-group-text" id="inputGroupPrepend">@</span>
				</div>
				<input type="text" class="form-control" name="username" placeholder="Username" aria-describedby="inputGroupPrepend" required>
				<div class="invalid-feedback">
					Please choose a username.
				</div>
				<button type="submit" class="btn btn-primary">SUBMIT</button>
			</div>
		</form>
		<?php if ( isset( $site ) ): ?>
			<form action="" method="get">
				<br>
				<div class="card alert alert-success" style="width: 288px; ">
					<img class=" instaimg card-img-top" src="<?php echo $profile_pic ?>" alt="Card image cap">
					<div class="card-body">
						<h5 class="card-title"><?php echo $name ?></h5>
						<p class="card-text"><?php echo $description ?></p>
					</div>
					<ul class="list-group">
						<li class="list-group-item"><?php echo $followers ?> Followers</li>
						<li class="list-group-item"><?php echo $following ?> Followings</li>
						<li class="list-group-item"><?php echo $posts ?> Posts</li>
					</ul>
				</div>

			</form>
		<?php elseif ( isset( $_POST[ 'username' ] ) ): ?>
			<div class="alert alert-danger" role="alert">
				Please write valid username!
			</div>
		<?php endif; ?>
	</body>
</html>