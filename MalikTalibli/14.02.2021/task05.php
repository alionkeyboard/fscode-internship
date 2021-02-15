<?php

$saat1 = '13:00';
$saat2 = '24:00';
$saat3 = '23:05';

function timer ( $saat )
{

	$a = explode( ':', $saat );

	$s1 = $a[ 0 ];
	$d1 = $a[ 1 ];

	if ( $s1 > 12 )
	{
		$s1 -= 12;

		return $s1 . ':' . $d1 . ' PM<br>';
	}
	else
	{
		return $saat . ' AM<br>';
	}

}

echo timer( $saat1 );
echo timer( $saat2 );
echo timer( $saat3 );

?>