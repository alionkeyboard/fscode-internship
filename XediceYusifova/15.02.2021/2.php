<?php

/**
 * Verilmiş sözün arrayın içində var olub olmadığını yoxlayan funksiya.
 * Yalnız for, while, foreach istifadə edə bilərsiz.
 */

$axtar1 = 'Prague';
$axtar2 = 'Baku';

function Axtar ( $axtar )
{

	$seherler = [
		'Baku',
		'Moscow',
		'London',
		'Istanbul'
	];
	$n        = 0;
	$cavab    = "";

	while ( isset( $seherler[ $n ] ) )
	{

		if ( $seherler[ $n ] === $axtar )
		{
			$cavab = "true";
		}

		$n++;
	}
	echo $cavab == "true" ? "$axtar -> $cavab <br />" : "$axtar -> false <br />";
}

echo Axtar( $axtar1 );
echo Axtar( $axtar2 );

//$axtar1 -> false
//$axtar2 -> true