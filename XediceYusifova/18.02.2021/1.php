<?php

/**
 * 1) Array-dəki ədədlərin ədədi ortasını tapan proqram.
 * count() , array_* kimi hazır funksiyalardan istifadə etmək olmaz.
 */

$ededler1 = [ 1, 4, 5, 9, 6 ];

function EdediOrta ( $ededler )
{
	$n   = 0;
	$cem = 0;

	while ( isset( $ededler[ $n ] ) )
	{
		$cem += $ededler[ $n ];
		$n++;
	}
	$edediOrta = $cem / $n; //Ədədi orta = Ədədləri toplayıb sayına bölmək

	return "Ədədi orta = $edediOrta";
}

echo EdediOrta( $ededler1 );