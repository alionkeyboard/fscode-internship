<?php
/*$ay = [
	'Yanvar',
	'Fevral',
	'Mart',
	'Aprel',
	'May',
	'Iyun',
	'Iyul ',
	'Avqust',
	'Sentyabr',
	'Oktyabr',
	'Noyabr',
	'Dekabr'];

	//$par = explode($ay);
	print_r($ay);

	///foreach ($ay as $key => $value) {
		//echo $ay[0];
		
		
		
	//}*/

if ( isset( $_POST[ 'form1' ] ) )
{
	if ( $_POST[ 'gun' ] > 0 && $_POST[ 'gun' ] < 30 )
	{
		echo $_POST[ 'gun' ];
	}
	else
	{
		return "sef deyer";
	}
	if ( $_POST[ 'ay' ] > 0 && $_POST[ 'ay' ] < 13 )
	{
		echo $ay[ '' ] = $_POST[ 'ay' ];

	}

	if ( $_POST[ 'il' ] > 0 )
	{
		echo $_POST[ 'il' ];
	}

}

?>


	<!DOCTYPE html>
	<html>
		<head>
			<title>Task 3</title>
		</head>
		<body>

			<form action="" method="post">
				<fieldset>
					<legend>Gun</legend>
					<input type="number" name="gun" maxlength="10">
				</fieldset>
				<fieldset>
					<legend>Ay</legend>
					<input type="text" name="ay" maxlength="10">
				</fieldset>
				<fieldset>
					<legend>Il</legend>
					<input type="text" name="il" maxlength="10">
				</fieldset>

				<button name="form1">Gonder</button>


			</form>

		</body>
	</html>


<?php

$herf   = range( 'a', 'z' );
$qiymet = array_fill( 0, 26, 0 );
$freq   = array_combine( $herf, $qiymet );
$soz    = "programlasdirma";
$len    = strlen( $soz );
for ( $i = 0; $i < $len; $i++ )
{
	$letter = strtolower( $soz[ $i ] );
	if ( array_key_exists( $letter, $freq ) )
	{
		$freq[ $letter ]++;
	}
}
print_r( $freq );

?>