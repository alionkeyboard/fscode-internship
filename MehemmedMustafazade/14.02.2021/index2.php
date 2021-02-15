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
		function saatiCevir ( $time )
		{
			$saat   = substr( $time, 0, 2 );
			$deqiqe = substr( $time, 3, 2 );

			if ( $saat > 12 )
			{
				$saat = $saat - 12;
				$ampm = 'PM';
			}
			else
			{
				if ( $saat == 0 )
				{
					$saat = 12;
				}

				if ( $saat < 10 )
				{
					$saat = substr( $saat, 1, 1 );
				}
				$ampm = 'AM';
			}

			return $saat . ':' . $deqiqe . $ampm;
		}

		$result = saatiCevir( "16:15" );
		echo $result;

		?>

	</body>
</html>