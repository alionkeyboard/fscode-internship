<?php

$ededler = [ 1, 4, 5, 9, 6 ];

// array elementlerinin sayi

function count_array_values ( $my_array )
{
	$count = 0;

	foreach ( $my_array as $key => $value )
	{

		$count++;

	}

	return $count;

}

// array elementlerinin cemi

function sum_array_values ( $my_array )
{
	$sum = 0;

	foreach ( $my_array as $key => $value )
	{

		$sum += $value;
	}

	return $sum;
}

$edediOrta = sum_array_values( $ededler ) / count_array_values( $ededler );

echo "Ededo orta " . $edediOrta . "-dir.";

?>