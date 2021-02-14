<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
	</head>
	<body>
		<?php

		function length ( $text )
		{
			$length = 0;
			while ( isset( $text[ $length ] ) )
			{
				$length++;
			}

			return $length;
		}

		function sozSayi ( $text )
		{
			$wordCount = 0;

			for ( $i = 0; $i < length( $text ) - 1; $i++ )
			{
				if ( $text[ $i ] == ' ' && ctype_alpha( $text[ $i + 1 ] ) && ( $i > 0 ) )
				{
					$wordCount++;
				}
			}
			$wordCount++;

			return $wordCount;
		}

		function ilkHerfBoyut ( $text )
		{
			$length = length( $text );
			for ( $i = 0; $i < $length; $i++ )
			{
				$currentChar = $text[ $i ];
				if ( $i == 0 && ctype_alpha( $currentChar ) )
				{
					$text[ $i ] = strtoupper( $currentChar );
				}
				if ( $currentChar == "." || $currentChar == "?" || $currentChar == "!" )
				{
					while ( $i < $length - 1 && ! ctype_alpha( $text[ $i ] ) )
					{
						$i++;
					}
					if ( ctype_alpha( $text[ $i ] ) )
					{
						$text[ $i ] = strtoupper( $text[ $i ] );
					}
				}
			}

			return $text;
		}

		function kesibGoster ( $text, $x, $y )
		{
			$length   = length( $text );
			$kesilmis = "";
			$count    = 0;

			if ( $x + $y > $length + 1 || $x <= 0 || $y <= 0 )
			{
				return "Daxil etdiyiniz indeks text-in xaricindedir";
			}
			for ( $i = $x - 1; $i < $length; $i++ )
			{
				if ( $count == $y )
				{
					break;
				}
				$kesilmis .= $text[ $i ];
				$count++;
			}

			return $kesilmis;
		}

		$kesilmis = kesibGoster( "Bu gunluk son tapshiriq.", 4, 6 );
		$text     = ilkHerfBoyut( "salam dunya.       .necesen?" );
		$sozSayi  = sozSayi( "Bu    cumlede . besh soz var" );
		echo $kesilmis;

		?>

	</body>
</html>