<?php

function axtar ( $list, $axtar )
{
	$i = 0;

	foreach ( $list as $element )
	{
		if ( $element === $axtar )
		{
			$i++;
		}
	}

	if ( $i != 0 )
	{
		return TRUE;
	}
	else
	{
		return FALSE;
	}
}

$seherler =
[
	'Baku',
	'Berlin',
	'Brooklyn',
	'Batman',
	'Bursa'
];
$axtar1   = 'Bishkek';
$axtar2   = 'Baku';

echo axtar( $seherler, $axtar1 ) . '<br>';
echo axtar( $seherler, $axtar2 );