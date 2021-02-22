<?php

$array = [
	'C:/',
	'Windows',
	[
		'system',
		'system32'
	],
	'Users',
	[
		'Ali',
		[
			'Documents',
			'Pictures'
		],
		'guest',
		[
			'Documents'
		]
	]
];

function doOutputList ( $TreeArray )
{
	echo '<dl>';
	echo '<dt>';
	foreach ( $TreeArray as $arr )
	{
		echo '<dd>';
		if ( is_array( $arr ) )
		{
			doOutputList( $arr );
		}
		else
		{
			echo $arr;
		}
		echo '</dd>';
	}
	echo '</dt>';
	echo '<dl>';
}

doOutputList( $array );

?>