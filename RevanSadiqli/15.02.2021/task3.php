<?php

function array_ters ( $arr )
{
	$yeni_arr = [];

	for ( $j = 0, $i = count( $arr ) - 1; $i >= 0; $i--, $j++ )
	{
		$yeni_arr[ $j ] = $arr[ $i ];
	}

	print_r( $yeni_arr );
}

$array = [
	"cixarin",
	"keyfini",
	"gunun",
	"bu"
];

array_ters( $array );
?>