<?php

$soz   = 'Proqramlashdirma';
$array = [];

$soz = strtolower( $soz );

for ( $i = 0; isset( $soz[ $i ] ); $i++ )
{
	$herf = $soz[ $i ];

	if ( isset( $array[ $herf ] ) )
	{
		$array[ $herf ] += 1;
	}
	else
	{
		$array[ $herf ] = 1;
	}
}

$dongu = 0;
$i     = 1;

echo $array[ 0 ];

while ( isset( $array[ $dongu ] ) )
{
	$i++;
	if ( isset( $array[ $dongu + 1 ] ) && $array[ $dongu ] > $array[ $dongu + 1 ] )
	{
		$muveqqeti           = $array[ $dongu ];
		$array[ $dongu ]     = $soz[ $dongu + 1 ];
		$array[ $dongu + 1 ] = $muveqqeti;

		$dongu = -1;
	}

	$dongu++;
}

echo $i;

print_r( $array );