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

		function tarixFormat ( $tarix )
		{
			$aylar = [
				"Yanvar",
				"Fevral",
				"Mart",
				"Aprel",
				"May",
				"Iyun",
				"Iyul",
				"Avqust",
				"Sentyabr",
				"Oktyabr",
				"Noyabr",
				"Dekabr"
			];

			$gun = substr( $tarix, 0, 2 );
			$ay  = substr( $tarix, 3, 2 );
			$il  = substr( $tarix, 6, 4 );

			if ( $ay > 12 )
			{
				return "xeta bash verdi.";
			}

			if ( $gun < 10 )
			{
				$gun = substr( $gun, 1, 1 );
			}

			if ( $ay < 10 )
			{
				$ay = substr( $ay, 1, 1 );
			}

			$ay = $aylar[ $ay - 1 ];

			return $gun . " " . $ay . " " . $il;
		}

		echo tarixFormat( "05-12-2002" );

		?>

	</body>
</html>