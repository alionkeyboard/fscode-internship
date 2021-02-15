<?php

/**
 * gün-ay-il formasında verilmiş tarixi gün, Ay il formatında çap edən proqram.
 * Explode istifadə edə bilərsiniz.
 * array_* funksiyalarından istifadə etmək olmaz, amma array istifadə edə bilərsiz.
 * date və bənzəri hazır funksiyalar olmaz.
 */

$tarix1 = '07-04-2000';
$tarix2 = '12-05-1977';

function Tarix ( $tarix )
{

	$aylar = [
		"",
		"Yanvar",
		"Fevral",
		"Mart",
		"Aprel",
		"May",
		"Iyun",
		"Avqust",
		"Sentyabr",
		"Oktyabr",
		"Noyabr",
		"Dekabr"
	];

	$date = explode( "-", $tarix );
	$ay   = (int) $date[ 1 ];
	$gun  = (int) $date[ 0 ];

	if ( $ay > 0 && $ay < 12 && $gun > 0 && $gun < 32 )
	{
		return ( $gun . " " . $aylar[ $ay ] . ", " . $date[ 2 ] );
	}
	else
	{
		$message = "wrong day or month";
		echo "<script>alert('$message');</script>";
	}
}

echo "\$tarix1 = ";
echo Tarix( $tarix1 ) . "<br />";

echo "\$tarix2 = ";
echo Tarix( $tarix2 ) . "<br />";

/**
 * $tarix1 = 7 Aprel, 2000
 * $tarix2 = 12 May, 1977
 */