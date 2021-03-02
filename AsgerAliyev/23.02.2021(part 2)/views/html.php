<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<link rel="stylesheet" href="views/style.css">
		<title>PicLink</title>
	</head>
	<body>
		<form action="" method="post" enctype="multipart/form-data">
			<input type="file" name="file" required>
			<button type="submit" name="submit">SUBMIT</button>
		</form>
		<div class="container">
			<?php foreach ( $links as $link ): ?><?php if ( file_exists( $link[ 'image_url' ] ) ): ?>
				<div class="mySlides">
					<div class="count"><?php echo array_search( $link, $links ) + 1 . '/' . count( $links )?></div>
					<img src="<?php echo $link[ 'image_url' ] ?>" class="image" alt="">
				</div>
			<?php endif; ?><?php endforeach; ?>
			<p class="prev" onclick="changeSlides(-1)">&#10094;</p>
			<p class="next" onclick="changeSlides(1)">&#10095;</p>
		</div>
		<script src="views/slide.js"></script>
	</body>
</html>
