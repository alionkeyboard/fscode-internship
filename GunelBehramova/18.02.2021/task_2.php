<?php

$multidimensional_arr = [
	'eded',
	[
		'kitab',
		'defter'

	],

	[
		1,
		11
	],

	'Baki'
];

function printAll ( $a )
{
	if ( ! is_array( $a ) )
	{
		echo "'" . $a . "'," . "<br>", ' ';

		return;
	}

	foreach ( $a as $v )
	{
		printAll( $v );
	}
}

echo '$arr =' . "<br>" . "[" . "<br>";

printAll( $multidimensional_arr );

echo "];";

?>
