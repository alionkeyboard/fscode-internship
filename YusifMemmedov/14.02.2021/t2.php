<?php

ini_set( 'display_errors', 1 );
ini_set( 'display_startup_errors', 1 );
error_reporting( E_ALL );

function vaxt ( $str )
{
	list( $saat, $deqiqe ) = explode( ':', $str );

	if ( $saat > 11 )
	{
		if ( $saat > 21 )
		{
			echo $saat - 12 . ':' . $deqiqe . ' PM';
		}
		else
		{
			echo 0 . $saat - 12 . ':' . $deqiqe . ' PM';
		}
	}
	else
	{
		echo $str . ' AM';
	}
	echo "<br>";
}

vaxt( '12:00' );
vaxt( '03:30' );
vaxt( '23:05' );
?>