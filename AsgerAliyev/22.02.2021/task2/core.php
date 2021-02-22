<?php

$alphabet = ['a','b','c','ç','d','e','ə','f','g','ğ','h','x','ı','i','j','k','q','l','m','n','o','ö','p','r','s','ş','t','u','ü','v','y','z'];

if ( isset( $_POST[ 'number' ] ) && isset( $_POST[ 'message' ] ) )
{
	$number   = $_POST[ 'number' ];
	$message  = mb_strtolower( trim( $_POST[ 'message' ] ) );
	$arr_mess = preg_split( '//u', $message );
	$new_arr  = [];

	foreach ( $arr_mess as $mess )
	{
		if ( in_array( $mess, $alphabet ) )
		{
			$i = array_search( $mess, $alphabet ) + $number;

			if ( $i >= 31 )
			{
				while ( $i > 31 )
				{
					$i = $i - 32;
				}
			}
			else if ( $i <= 0 )
			{
				while ( $i < 0 )
				{
					$i = $i + 32;
				}
			}

			$new_arr[] = $alphabet[ $i ];
		}
		else
		{
			$new_arr[] = $mess;
		}
	}

	$coded_message = implode( '', $new_arr );
}
