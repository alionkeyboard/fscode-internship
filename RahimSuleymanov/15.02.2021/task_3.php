<?php

/**
 * 3) arrayın elementlərini tərsinə çevirib yeni array yaradan funksiya, array_* istifadə etmək olmaz.
 */

function myArray_reverse ( array $array, $preserve_keys = FALSE )
{
	$output = [];

	$count = count( $array );
	if ( $preserve_keys !== FALSE )
	{
		for ( $i = $count - 1; $i >= 0; $i-- )
		{
			$output[ $i ] = $array[ $i ];
		}
	}
	else
	{
		for ( $i = $count - 1; $i >= 0; $i-- )
		{
			$output[] = $array[ $i ];
		}
	}

	return $output;
}

$array = [
	'cixarin',
	'keyfini',
	'gunun',
	'bu'
];

echo '<pre>';
print_r( myArray_reverse( $array ) );
print_r( myArray_reverse( $array, TRUE ) );
