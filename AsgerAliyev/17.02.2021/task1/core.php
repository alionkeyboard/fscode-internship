<?php

$rgb_arr = [];

if ( isset( $_POST[ 'reng' ] ) )
{
	$reng = $_POST[ 'reng' ];

	if ( $reng === $_SESSION[ 'reng' ] )
	{
		$cavab = $reng . ' dogru cavabdir. ';
	}
	else
	{
		$cavab = $reng . ' yalnish cavabdir. ';
	}
}

//Bu loop vasitəsilə variantlar üçün lazım olan rəng kodları təsadüfi olaraq seçilir

for ( $i = 0; $i <= 4; $i++ )
{
	$q = rand( 0, 255 );
	$y = rand( 0, 255 );
	$g = rand( 0, 255 );

	array_push( $rgb_arr, "$q, $g, $y" );
}

//Burda variantların arasından təsadüfi birini seçib onu düzgün variant qəbul edirik və $_SESSİON vasitəsilə yadda saxlayırıq

$correct_answer_key = array_rand( $rgb_arr, 1 );

$_SESSION[ 'reng' ] = $rgb_arr[ $correct_answer_key ];

