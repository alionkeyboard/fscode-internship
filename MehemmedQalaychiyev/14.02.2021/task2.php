<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<form action="" method="get">
			<input type="text" name="saat" class="input" required>
			<input type="submit" class="btn" value="Çevir">
		</form>
		<h2>Netice : </h2>
		<?php
		if ( isset( $_GET[ 'saat' ] ) )
		{
			$time = explode( ':', $_GET[ 'saat' ] );
			if ( $time[ 0 ] > 12 )
			{
				$s    = $time[ 0 ] - 12;
				$d    = $time[ 1 ];
				$saat = $s . ":" . $d . " PM";
			}
			else if ( $time[ 0 ] == 00 || $time[ 0 ] == 0 )
			{
				$s    = 12;
				$d    = $time[ 1 ];
				$saat = $s . ":" . $d . " PM";
			}
			else
			{
				$s    = $time[ 0 ];
				$d    = $time[ 1 ];
				$saat = $s . ":" . $d . " AM";
			}
			echo "<h3>$saat</h3>";
		}
		?>
	</body>
</html>