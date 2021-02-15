<?php

function convert12 ( $str )
{
	//saati yazdirma
	$h1 = $str[ 0 ];
	$h2 = $str[ 1 ];
	$hh = $h1 * 10 + $h2;
	//AM ve ya PM tapma
	if ( $hh < 12 )
	{
		$Meridian = "AM";
	}
	else
	{
		$Meridian = "PM";
	}
	$hh %= 12;

	if ( $hh == 0 )
	{
		echo "12";
		// deqiqeni yazdirma
		for ( $i = 2; $i < 5; ++$i )
		{
			echo $str[ $i ];
		}
	}
	else if ( $hh < 10 )
	{
		echo "0" . $hh;
		for ( $i = 2; $i < 5; ++$i )
		{
			echo $str[ $i ];
		}
	}
	else
	{
		echo $hh;
		for ( $i = 2; $i < 5; ++$i )
		{
			echo $str[ $i ];
		}
	}

	echo " ", $Meridian;

}

$str = "00:00";
convert12( $str );
?>