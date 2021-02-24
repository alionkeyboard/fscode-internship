<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>PicLink</title>
	</head>
	<body>
		<form action="" method="post" enctype="multipart/form-data">
			<input type="file" name="file" required>
			<button type="submit" name="submit">SUBMIT</button>
		</form>
        <br>
        <?php foreach ($links as $link):?>
        <li>
            <a href="<?php echo $link[ 'image_url' ] ?>"><?php echo $link[ 'image_url' ] ?></a> | <?php echo $link[ 'upload_time' ]?>
        </li>
        <?php endforeach;?>

	</body>
</html>