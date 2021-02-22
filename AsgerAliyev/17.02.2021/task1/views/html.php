<!doctype html>
<html lang="tr">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<link rel="stylesheet" href="views/style.css">

		<title>Reng</title>
	</head>
	<body>
		<h1>Rengi tap</h1>
		<form action='' method='post' id='rengtapan'>
			<h2><?php echo $_SESSION[ 'reng' ] ?></h2>
			<?php

			foreach ( $rgb_arr as $i )
			{

				echo "<label for='$i' class='button' style='background-color: rgb( $i ) ' >" . "</label>";
				echo "<input type='radio' class='button' name='reng' id='$i' value='$i'>";
			}

			if ( isset( $cavab ) )
			{
				echo '<br><h2>' . $cavab . '</h2>';
			}
			?>
		</form>
		<script src="views/submit.js"></script>
	</body>
</html>
