<?php

$arr = [

	'qirmizi' => 12,
	'yashil'  => 6,
	'goy'     => 6

];

function rand_with_arrays ( $arrays )
{

	//create a temporary array
	$tmp = [];

	//loop through all colors
	foreach ( $arrays as $color => $count )
	{

		//for each entry for a specific name, add name to `$tmp` array
		for ( $x = 1; $x <= $count; $x++ )
		{
			$tmp[] = $color;
		}

	}

	//return random name from `$tmp` array
	return $tmp[ array_rand( $tmp ) ];
}

echo rand_with_arrays( $arr );

?>