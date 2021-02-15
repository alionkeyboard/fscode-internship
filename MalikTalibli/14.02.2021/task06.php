<?php

$tarix1 = '07-04-2000';
$tarix2 = '12-05-1997';

function timer ( $tarix )
{

	$a = explode( '-', $tarix );

	$gun = $a[ 0 ];
	if ( $gun < 10 )
	{
		$gun = $gun[ 1 ];
	};

	$ay = $a[ 1 ] - 1;
	$il = $a[ 2 ];

	$month = [
		'yanvar',
		'fevral',
		'mart',
		'aprel',
		'may',
		'iyun',
		'iyul',
		'avqust',
		'sentyabr',
		'oktyabr',
		'noyabr',
		'dekabr'
	];

	$ay = $month[ $ay ];

	foreach ( $month as $key => $value )
	{
		if ( $ay === $key )
		{
			$ay = $value;
			break;
		}
	}

	return $gun . ' ' . $ay . ',' . ' ' . $il . '<br>';

}

echo timer( $tarix1 );
echo timer( $tarix2 );

?>