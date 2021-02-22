<?php

function myRecursive ( array $array, $tabLevel = 1 )
{
	$tab = '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
	foreach ( $array as $key => $value )
	{
		//If $value is an array.
		if ( is_array( $value ) )
		{
			myRecursive( $value, $tabLevel + 1 );
		}
		else
		{
			echo str_repeat( $tab, $tabLevel ) . $value . '<br>';
		}
	}
}

$array = [
	'C:/',
	[ 'Windows' ],
	[
		[ 'system' ],
		[ 'system32' ]
	],
	[ 'Users' ],
	[
		[ 'Ali' ],
		[
			[ 'Documents' ],
			[ 'Pictures' ],
		],
		[ 'guests' ],
		[
			[ 'Documents' ]
		]
	]
];

myRecursive( $array );

