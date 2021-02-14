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
			<input type="number" name="number1" required placeholder="Ilk reqemi daxil edin">
			<input type="number" name="number2" required placeholder="Sonuncu reqemi daxil edin">
			<input type="text" name="text" placeholder="Metni daxil edin.">
			<button type="submit">Yoxla</button>
		</form>


		<?php
		$yenimetn = "";
		if ( isset( $_GET[ 'text' ] ) )
		{
			$text = $_GET[ 'text' ];
			function cut ( $a, $b, $text )
			{
				$newtext = "";
				$x       = 0;
				while ( TRUE )
				{
					if ( ! isset( $text[ $x ] ) || $x - $a == $b )
					{
						if ( $x < $a )
						{
							$newtext = $text;
						}
						else
						{
							$newtext .= $text[ $x - 1 ];
						}
						break;
					}

					if ( $x == $a || $x > $a )
					{
						$newtext .= $text[ $x - 1 ];
					}
					$x++;
				}

				return $newtext;
			}

			$yenimetn = cut( $_GET[ 'number1' ], $_GET[ 'number2' ], $text );
		}

		?>
		<h3>Netice : <?= $yenimetn ?></h3>
	</body>
</html>