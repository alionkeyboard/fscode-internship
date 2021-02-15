<?php

$saat1 = '13:00';
$saat2 = '03:30';
$saat3 = '00:00';

function timeFormatConverter ( $time )
{
	$arr = explode( ':', $time );

	if ( $arr[ 0 ] > 12 )
	{
		$arr[ 0 ] -= 12;

		return "Time is $arr[0]:$arr[1] AM";
	}
	else
	{
		return "Time is $time PM";
	}
}

echo timeFormatConverter( $saat1 ) . '<br>';
echo timeFormatConverter( $saat2 ) . '<br>';
echo timeFormatConverter( $saat3 );
