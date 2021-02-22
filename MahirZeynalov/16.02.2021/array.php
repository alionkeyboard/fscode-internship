<?php

$array = [
	'fst' => 'monday',
	'sc'  => 'tuesday',
	'wd'  => 'wednesday',
	'thr' => 'thursday',
	'fr'  => 'friday',
	'st'  => 'saturday',
	'sn'  => 'sunday'
];

function elementi_goster ( $array, $index )
{
	switch ( $array )
	{
		case $array[ 'fst' ];
			// $index = $array[0];
			return $array[ 0 ];
			break;
		case $array[ 'sc' ];
			return $array[ 1 ];
			break;
		case $array[ 'wd' ];
			return $array[ 2 ];
			break;
		case $array[ 'thr' ];
			return $array[ 3 ];
			break;
		case $array[ 'fr' ];
			return $array[ 4 ];
			break;
		case $array[ 'st' ];
			return $array[ 5 ];
			break;
		case $array[ 'sn' ];
			return $array[ 6 ];
			break;
	}
}

function elementi_goster1 ( $array, $index )
{

}

print elementi_goster( $array, 0 );
var_dump( elementi_goster( $array, 5 ) );
print_r( elementi_goster( $array, 0 ) );

// iwlemir, null qaytarir