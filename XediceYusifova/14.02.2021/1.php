<?php

/**
 * Verilmiş textdəki hərfləri işlənmə sayına görə yuxarıdan aşağı doğru çap edən proqram.
 * Array və for, vvhile, foreach istifadə edə bilərsiz.
 * array_*, substr, strlen istifadə etmək olmaz.
 */

$text = 'Proqramlasdirma';

$n = 0; //strlen əvəzi

while ( isset( $text[ $n ] ) )
{
	$array[ $n ] = $text[ $n ]; //str_split($text) əvəzi
	$n++;
}

$resultArr = [];

foreach ( $array as $value )
{ //array_count_values əvəzi
	$resultArr[ $value ] = isset( $resultArr[ $value ] ) ? $resultArr[ $value ] + 1 : 1;
}

foreach ( $resultArr as $key => $value )
{
	echo "$key -> $value <br />";
}

/**
 * p -> 1
 * r -> 3
 * o -> 1
 * q -> 1
 * a -> 3
 * m -> 2
 * l -> 1
 * s -> 1
 * d -> 1
 * i -> 1
 */