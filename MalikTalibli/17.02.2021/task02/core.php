<?php

//random reng kodlari hazirlayiriq
$rgb = [
	'r' => [
		rand( 0, 255 ),
		rand( 0, 255 ),
		rand( 0, 255 ),
		rand( 0, 255 ),
	],

	'g' => [
		rand( 0, 255 ),
		rand( 0, 255 ),
		rand( 0, 255 ),
		rand( 0, 255 ),
	],

	'b' => [
		rand( 0, 255 ),
		rand( 0, 255 ),
		rand( 0, 255 ),
		rand( 0, 255 ),
	],
];

//4 cavab varianti yazirliyiriq
$variant1 = $rgb[ 'r' ][ 0 ] . ', ' . $rgb[ 'g' ][ 0 ] . ', ' . $rgb[ 'b' ][ 0 ];
$variant2 = $rgb[ 'r' ][ 1 ] . ', ' . $rgb[ 'g' ][ 1 ] . ', ' . $rgb[ 'b' ][ 1 ];
$variant3 = $rgb[ 'r' ][ 2 ] . ', ' . $rgb[ 'g' ][ 2 ] . ', ' . $rgb[ 'b' ][ 2 ];
$variant4 = $rgb[ 'r' ][ 3 ] . ', ' . $rgb[ 'g' ][ 3 ] . ', ' . $rgb[ 'b' ][ 3 ];

//random suali veririk
$variantlar = [ $variant1, $variant2, $variant3, $variant4 ];
$question   = $variantlar[ rand( 0, 3 ) ];

if ( isset( $_POST[ 'number' ] ) )
{

	$answer  = $_POST[ 'number' ];//cavabi aliriq
	$correct = $_POST[ 'hidden' ];//dogru cavabi aliriq

	if ( $answer == $correct )
	{

		$response = 'success';

	}
	else
	{

		$response = 'error';

	}
}

?>

 