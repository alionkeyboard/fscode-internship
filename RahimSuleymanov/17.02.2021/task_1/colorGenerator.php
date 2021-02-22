<?php

session_start();
function random_color ()
{
	$html      = '';
	$colorCode = '';
	$answer    = rand( 0, 4 );
	for ( $i = 0; $i < 5; $i++ )
	{
		// reng kodun generate etdim
		while ( strlen( $colorCode ) < 6 )
		{
			$colorCode .= sprintf( "%02X", mt_rand( 0, 255 ) );
		}

		// dogru cavabi sessiona atdim
		if ( $answer == $i )
		{
			$_SESSION[ 'answer' ] = $colorCode;
		}

		// html formani hazirladim
		$html .= '<span class="rounded-circle color" id="' . $colorCode . '" style="background-color: #' . $colorCode . '"></span>';

		$colorCode = '';
	}

	return $html;
}

//echo random_color();