<?php

function tap ( $saat1 )
{
	$saat1   = trim( '21:25' );
	$index   = ' pm';
	$netice  = '';
	$netice1 = '';
	$index1  = ' am';

	if ( $saat1[ 0 ] . $saat1[ 1 ] > 12 )
	{

		$netice = ( $saat1[ 0 ] . $saat1[ 1 ] - 12 );

		return $netice . $saat1[ 2 ] . $saat1[ 3 ] . $saat1[ 4 ] . $index;
		exit();
	}

	else
	{
		if ( $saat1[ 0 ] . $saat1[ 1 ] < 12 )
		{

			$netice1 = $saat1[ 0 ] . $saat1[ 1 ];

			return $netice1 . $saat1[ 2 ] . $saat1[ 3 ] . $saat1[ 4 ] . $index1;
			exit();
		}
	}
}

echo @tap( $saat1 );

?>