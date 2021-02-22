<?php
/**
 * 2) Verilmiş sözün arrayın içində var olub olmadığını yoxlayan funksiya. Yalnız for, while, foreach istifadə edə bilərsiz.
 */

function myIn_array ( $needle, array $haystack )
{
	$find = FALSE;
	foreach ( $haystack as $element )
	{
		if ( $element === $needle )
		{
			$find = TRUE;
		}
	}

	return $find;
}

$sheherler = [
	'Baku',
	'Moscow',
	'London',
	'Istanbul'
];

$axtar1 = 'Prague';
$axtar2 = 'Baku';
var_dump( myIn_array( $axtar1, $sheherler ) );
var_dump( myIn_array( $axtar2, $sheherler ) );
