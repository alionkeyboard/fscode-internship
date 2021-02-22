<?php

function multiDimArray ( $array, $inner = 1 )
{

	foreach ( $array as $val )
	{
		if ( is_array( $val ) )
		{
			multiDimArray( $val, $inner + 1 ); //recursion
		}
		else
		{
			for ( $i = 0; $i < $inner; $i++ )
			{
				echo "\t";
			}
			echo $val . "\n";
			//str_repeat() could be used instead of for loop//
			//echo str_repeat("\t", $inner).$val."\n";
			//burda return ile hell tapa bilmedim.

		}
	}
}

$arr = [
	'C:/',
	[ 'Windows', [ 'system', 'system32' ] ],
	[ 'Users', [ 'Ali', [ 'Documents', 'Pictures' ], 'guest', [ 'Documents' ] ] ]
];
multiDimArray( $arr );
?>