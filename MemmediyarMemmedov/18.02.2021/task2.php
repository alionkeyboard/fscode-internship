<?php

$array = [
	'eded',
	[ 'kitab', "defter" ],
	[ 1, 11 ],
	'Baki'

];
$a     = [ $array[ 0 ], $array[ 1 ][ 0 ], $array[ 1 ][ 1 ], $array[ 2 ][ 0 ], $array[ 2 ][ 1 ], $array[ 3 ] ];
print_r( $a );
///
$arr = [];
function single_array ( $k )
{
	global $arr;
	$arr[] = $k;
}

array_walk_recursive( $array, "single_array" );
print_r( $arr );

