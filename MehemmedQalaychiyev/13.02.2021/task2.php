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
		$text = "";
		if ( isset( $_GET[ 'text' ] ) )
		{
			$x    = 0;
			$text = $_GET[ 'text' ];
			while ( TRUE )
			{
				if ( ! isset( $text[ $x ] ) )
				{
					break;
				}
				$text[ 0 ] = ucfirst( $text[ 0 ] );
				if ( $text[ $x ] == "." )
				{
					if ( isset( $text[ $x + 1 ] ) )
					{
						if ( $text[ $x + 1 ] !== " " )
						{
							$text[ $x + 1 ] = ucfirst( $text[ $x + 1 ] );
						}
						else
						{
							$x++;
							while ( TRUE )
							{
								if ( ! isset( $text[ $x ] ) )
								{
									break;
								}
								if ( $text[ $x ] !== " " )
								{
									$text[ $x ] = ucfirst( $text[ $x ] );
									break;
								}
								$x++;
							}
						}
					}
					else
					{
						break;
					}
				}
				$x++;
			}
		}

		?>
		<h3>Netice : <?= $text ?></h3>
	</body>
</html>