<?php

function reverseArray ( $arr )
{
	$i = count( $arr ) - 1;

	while ( isset( $arr[ $i ] ) )
	{
		$reversed_arr[] = $arr[ $i ];
		$i--;
	}

	return $reversed_arr;
}

$cumle = [
	'uzredir',
	'gelmek',
	'aylari',
	'yaz'
];

print_r( reverseArray( $cumle ) );

