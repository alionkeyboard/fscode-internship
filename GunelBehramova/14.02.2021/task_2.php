<?php

$saat1 = '13:00';
$saat2 = '03:30';
$saat3 = '23:05';

$arrays = [ $saat1, $saat2, $saat3 ];

foreach ( $arrays as $array )
{
	$tarr = explode( ':', $array );

	if ( strpos( $array, 'PM' ) === FALSE && $tarr[ 0 ] > '12' )
	{
		$tarr[ 0 ] = $tarr[ 0 ] - 12;
		$ampm      = ' PM';

	}
	else if ( strpos( $array, 'PM' ) === FALSE && $tarr[ 0 ] == '12' )
	{
		$tarr[ 0 ] = '00';
		$ampm      = 'AM';

	}

	echo 'saat ' . '- ' . preg_replace( "/[^0-9 :]/", '', implode( ':', $tarr ) ) . $ampm . '<br>';

}

?>