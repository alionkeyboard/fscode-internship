<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<form action="" method="get">
			<input type="text" name="text" placeholder="Metni daxil edin.">
			<button type="submit">Yoxla</button>
		</form>


		<?php
		$say = 0;
		if ( isset( $_GET[ 'text' ] ) )
		{
			$x    = 0;
			$text = $_GET[ 'text' ];
			while ( TRUE )
			{
				if ( ! isset( $text[ $x ] ) )
				{
					$say += 1;
					break;
				}
				if ( $text[ $x ] == " " )
				{
					$say += 1;
				}
				$x++;
			}
		}

		?>
		<h3>Netice : <?= $say ?></h3>
	</body>
</html>