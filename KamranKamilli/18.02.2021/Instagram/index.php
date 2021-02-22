<?php

include './controller/instagram.php'
?>
<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous"/>
		<link rel="stylesheet" href="./styles//style.css" type="text/css">
		<title>Instagram</title>
	</head>

	<body>

		<div class="container">
			<header id="header">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<img src="./images//1b47f9d0e595.png" alt="logo">
					</div>
					<div class="col-md-8 col-sm-6">
						<form action="" method="POST">
							<input type="text" id="username" name="username" placeholder="Search">
							<button id="showbutton">Search</button>
							<span class="help-block"><?php echo $noUser; ?></span>
						</form>
					</div>
				</div>
			</header>

			<section id="section">
				<div class="row">
					<div class="col-md-4" style="text-align: center;">
						<?php if ( $img )
						{
							echo "<img id='profileimg' src='$img' alt='profile picture'>";
						} ?>
					</div>
					<div class="col-md-8">
						<div class="row">
							<div class="col-md-4">
								<h3><?php echo $numberOfPosts ?></h3>
							</div>
							<div class="col-md-4">
								<h3><?php echo $followersCount ?></h3>
							</div>
							<div class="col-md-4">
								<h3><?php echo $followCount ?></h3>
							</div>
						</div>
						<div class="row" id="fullname">
							<div class="col-md-12">
								<h3><?php echo $fullName ?></h3>
							</div>
						</div>
						<div class="row">
							<div class="co-md-12">
								<h3><?php echo $bio ?></h3>
							</div>
						</div>
					</div>
				</div>
			</section>
			<main>
				<div class="row">
					<?php if ( $private != "" )
					{
						echo "<div class='col-md-4 offset-4'><i class='fas fa-lock fa-3x'></i><span class='help-block'>$private</span></div>";
					} ?>
					<?php foreach ( $posts as $post ) : ?>
						<div class="col-md-4 postcontainer">
							<img class="post" src="<?php echo $post[ 'node' ][ 'display_url' ] ?>" alt='post'>
						</div>
					<?php endforeach; ?>
				</div>
			</main>
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
	</body>

</html>