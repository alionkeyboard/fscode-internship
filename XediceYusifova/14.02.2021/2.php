<?php

/**
 * 24 saatlıq formatında verilmiş saatı 12 saatlıq formatda çap edən funksiya.
 * Bu dəfə explode istifadə edə bilərsiniz.
 * Lakin, date və bənzəri funksiyalardan istifadə etmək olmaz.
 */

$saat1 = '13:00';
$saat2 = '03:30';
$saat3 = '23:05';

function Saat ( $saat )
{

	$saat = explode( ":", $saat );

	if ( $saat[ 0 ] < 12 )
	{
		$x = " AM";
		if ( $saat[ 0 ][ 0 ] != 0 )
		{
			$saat[ 0 ] = "0" . $saat[ 0 ];
		}
		else if ( $saat[ 0 ] > 9 )
		{
			$saat[ 0 ] = $saat[ 0 ];
		}
	}
	else
	{
		$x         = " PM";
		$saat[ 0 ] = $saat[ 0 ] - 12;
		if ( $saat[ 0 ] < 10 && ! isset( $saat[ 0 ][ 1 ] ) )
		{
			$saat[ 0 ] = "0" . $saat[ 0 ];
		}
	}

	return ( $saat[ 0 ] . ":" . $saat[ 1 ] . $x );

	print_r( $saat );
	//print_r($array);
}

echo "\$saat1 -> " . Saat( $saat1 ) . "<br />";
echo "\$saat2 -> " . Saat( $saat2 ) . "<br />";
echo "\$saat3 -> " . Saat( $saat3 ) . "<br />";

/**
 * $saat1 -> 01:00 PM
 * $saat2 -> 03:30 AM
 * $saat3 -> 11:05 PM
 */