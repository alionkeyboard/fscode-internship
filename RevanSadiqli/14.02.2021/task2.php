<?php

/**************TASK2**********/
function timeAMPM ( $saat )
{

	$saat   = explode( ":", $saat );
	$hour   = $saat[ 0 ];
	$minute = $saat[ 1 ];

	$time = $hour > 11 ? " PM" : " AM";

	$hour = ( $hour %= 12 ) == 0 ? 12 : $hour;

	echo( $hour >= 10 ? $hour . ":" . $minute . $time . "<br>" : "0" . $hour . ":" . $minute . $time . "<br>" );

}

timeAMPM( "00:00" );
timeAMPM( "03:30" );
timeAMPM( "23:05" );

?>