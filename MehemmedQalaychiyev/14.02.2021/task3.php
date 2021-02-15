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
			<input type="date" name="tarix" class="input" required>
			<input type="submit" class="btn" value="Çevir">
		</form>
		<h2>Netice : </h2>
		<?php
		if ( isset( $_GET[ 'tarix' ] ) )
		{
			$date  = explode( '-', $_GET[ 'tarix' ] );
			$aylar = [
				"Yanvar",
				"Fevral",
				"Mart",
				"Aprel",
				"May",
				"İyun",
				"İyul",
				"Avqust",
				"Sentyabr",
				"Oktyabr",
				"Noyabr",
				"Dekabr"
			];
			$g     = $date[ 2 ];
			$ay    = $aylar[ ltrim( $date[ 1 ], "0" ) - 1 ];
			$il    = $date[ 0 ];
			$tarix = $g . " " . $ay . ", " . $il;
			// if($time[0] > 12){
			//     $s = $time[0]-12;
			//     $d = $time[1];
			//     $saat = $s . ":" . $d . " PM";
			// }
			// elseif($time[0] == 00 || $time[0] == 0){
			//     $s = 12;
			//     $d = $time[1];
			//     $saat = $s . ":" . $d . " PM";
			// }
			// else{
			//     $s = $time[0];
			//     $d = $time[1];
			//     $saat = $s . ":" . $d . " AM";
			// }
			echo "<h3>$tarix</h3>";
		}
		?>
	</body>
</html>