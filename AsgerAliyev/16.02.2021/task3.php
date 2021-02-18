<?php

function correcter ( $arr, $bosh )
{
	header( 'Content-Type: text/plain' );

	if ( is_array( $arr ) )
	{
		$bosh .= "\t";

		foreach ( $arr as $v )
		{
			correcter( $v, $bosh );
		}
	}
	else
	{
		echo $bosh . $arr . PHP_EOL;
	}
}

$multi_arr = [
	'C:/',
	[
		'windows',
		[
			'system',
			'system32'
		],
		'User',
		[
			'Ali',
			[
				'Documents',
				'Pictures'
			],
			'guest',
			[
				'documents',
			]
		]
	]
];
$bosh      = '';

correcter( $multi_arr, $bosh );