<?php
/**
 * 1) Mətni verilmiş simvoldan hissələrə bölüb array yaradan funksiya. Explode, array_*, strpos, digər string funksiyaları istifadə etmək olmaz.
 */

function myExplode ( $delimiter, $string )
{
	$loop    = TRUE;
	$n       = 0;
	$element = '';
	$output  = [];
	while ( $loop === TRUE )
	{
		if ( isset( $string[ $n ] ) )
		{
			if ( $string[ $n ] != $delimiter )
			{
				$element .= $string[ $n ];
			}

			if ( $string[ $n ] == $delimiter )
			{
				$output[] = $element;
				$element  = '';
			}
			$n++;
		}
		else
		{
			$loop = FALSE;
		}
	}

	return $output;
}

$delimiter = ':';
$string    = 'Rahim:Suleymanov:1994:ADPU';

print_r( myExplode( $delimiter, $string ) );

