<?php

$saat1 = '13:00';
$saat2 = '03:30';
$saat3 = '23:05';
$_24   = [
	$saat1 => '13:00',
	$saat2 => '03:30',
	$saat3 => '23:05'
];

$_12 = [];

foreach ( $_24 as $_24clock )
{
	$hour = ( explode( ':', $_24clock ) )[ 0 ];

	if ( $hour > 12 )
	{
		$newHour  = $hour - 12;
		$newHour  = str_pad( $newHour, 2, 0, STR_PAD_LEFT );
		$_12clock = str_replace( $hour, $newHour, $_24clock ) . " PM";
	}
	else
	{
		$_12clock = $_24clock . " AM";
	}

	$_12[] = $_12clock;
}

echo '<pre>', print_r( $_12 ), '</pre>';
