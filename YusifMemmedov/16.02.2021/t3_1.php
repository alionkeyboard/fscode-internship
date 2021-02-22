<?php

header( 'Content-Type: text/plain' );
ini_set( 'display_errors', 1 );
ini_set( 'display_startup_errors', 1 );
error_reporting( E_ALL );

function yaz ( $arr, $depth = -1 )
{
	$depth++;
	$str = '';

	foreach ( $arr as $key => $value )
	{

		if ( is_array( $value ) )
		{
			$str .= "\n" . str_repeat( "\t", $depth ) . $key . "\n";
			$str .= yaz( $value, $depth );
		}
		else
		{
			$str .= "\n" . str_repeat( "\t", $depth ) . $value . "\n";
		}

	}

	return $str;
}

$array = [
	'c:/' => [
		'windows' => [
			'system',
			'system32'
		],
		'Users'   => [
			'Ali'   => [
				'documents',
				'pictures'
			],
			'guest' => [
				'documents'
			]
		]
	]
];

echo yaz( $array );
?>