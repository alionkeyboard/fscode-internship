<?php

/**
 * 1) Array-dəki ədədlərin ədədi ortasını tapan proqram.
 * count() , array_* kimi hazır funksiyalardan istifadə etmək olmaz.
 */

$ededler = [ 2, 5, 6, 1, 11, 3 ];

function getVariableName ( $var )
{ //dəyişən adını almaq üçün, məsələn dəyişən $x olarsa nəticə x olacaq

	foreach ( $GLOBALS as $varName => $value )
	{

		if ( $value === $var )
		{
			return $varName;
		}
	}
}

function max_value ( $arr )
{
	$max  = 0;
	$name = getVariableName( $arr );

	for ( $i = 0; $i < count( $arr ); $i++ )
	{

		if ( $arr[ $i ] > $max )
		{
			$max = $arr[ $i ];
		}
	}

	return "$$name -> $max";
}

echo max_value( $ededler );

//$ededler -> 11