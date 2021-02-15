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
			<input type="text" name="text" class="input" required value="<?php echo ( isset( $_GET[ 'text' ] ) ) ? $_GET[ 'text' ] : NULL ?>">
			<input type="submit" class="btn" value="Yoxla">
		</form>
		<?php
		function uzunluq ( $deger )
		{
			$x = 0;
			if ( gettype( $deger ) == 'array' )
			{
				foreach ( $deger as $key => $value )
				{
					$x++;
				}
			}
			else if ( gettype( $deger ) == 'string' )
			{
				while ( isset( $deger[ $x ] ) )
				{
					$x++;
				}
			}

			return $x;
		}

		if ( isset( $_GET[ 'text' ] ) )
		{
			$text = strtolower( $_GET[ 'text' ] );
			$obj  = [];
			$x    = 0;
			while ( TRUE )
			{
				if ( ! isset( $text[ $x ] ) )
				{
					break;
				}
				if ( $text[ $x ] !== " " )
				{
					if ( uzunluq( $obj ) == 0 )
					{
						$obj[ 0 ] = [ $text[ $x ] => 1 ];
					}
					else
					{
						for ( $i = 0; $i < uzunluq( $obj ); $i++ )
						{
							if ( isset( $obj[ $i ][ $text[ $x ] ] ) )
							{
								$obj[ $i ][ $text[ $x ] ] = $obj[ $i ][ $text[ $x ] ] + 1;
							}
							else
							{
								$obj[ $i ][ $text[ $x ] ] = 1;
							}
						}
					}
				}
				$x++;
			}
			echo "<h2>Netice : </h2>";
			echo "<pre>";
			print_r( $obj[ 0 ] );
			echo "</pre>";

		}

		?>
	</body>
</html>