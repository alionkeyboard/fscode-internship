<?php

function convertTimeTo12 ( $time )
{
	$digit_1 = $time[ 0 ] - '0';
	$digit_2 = $time[ 1 ] - '0';

	$meridian = "";

	$hh = $digit_1 * 10 + $digit_2;

	if ( $hh > 12 )
	{
		$meridian = "PM";
	}
	else
	{
		$meridian = "AM";
	}

	$hh = $hh % 12;

	var_dump( $hh );
	if ( $hh == 0 )
	{
		echo "12";

		for ( $i = 2; $i < 5; $i++ )
		{
			echo $time[ $i ];
		}
	}
	else
	{
		echo $hh;
		for ( $i = 2; $i < 5; $i++ )
		{
			echo $time[ $i ];
		}
	}
	echo " ", $meridian;
}

$time_1 = "13:00";
$time_2 = "03:30";
$time_3 = "23:05";

convertTimeTo12( $time_1 );
?>