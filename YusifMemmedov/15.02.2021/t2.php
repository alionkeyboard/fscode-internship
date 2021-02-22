<?php

ini_set( 'display_errors', 1 );
ini_set( 'display_startup_errors', 1 );
error_reporting( E_ALL );

function axtar ( $sheher = 'london', $sheherler = [ 'baku', 'london', 'tokio', 'dubai' ] )
{

	$tapdi = 'false';

	foreach ( $sheherler as $city )
	{

		if ( $sheher === $city )
		{
			$tapdi = 'true';
			break;
		}

	}

	echo $tapdi . '<br>';
}

axtar();
axtar( $sheher = 'mexico' );
?>