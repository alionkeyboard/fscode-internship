<?php
/**
 * 2) 24 saatlıq formatında verilmiş saatı 12 saatlıq formatda çap edən funksiya. Bu dəfə explode istifadə edə bilərsiniz. Lakin, date və bənzəri funksiyalardan istifadə etmək olmaz.
 */

function talkTime ( $clock = NULL )
{
	$clock  = explode( ':', $clock );
	$medium = 'AM';

	$convert = FALSE;

	if ( count( $clock ) === 2 )
	{
		if ( ctype_digit( $clock[ 0 ] ) && ctype_digit( $clock[ 1 ] ) )
		{
			if ( $clock[ 0 ] < 24 && $clock[ 1 ] < 60 )
			{
				if ( $clock[ 0 ] > 12 )
				{
					$clock[ 0 ] = $clock[ 0 ] - 12;
					$medium     = 'PM';
				}
				$convert = TRUE;
			}
		}
	}

	if ( $convert === FALSE )
	{
		return 'Please, enter right date format!';
	}

	return $clock[ 0 ] . ' : ' . $clock[ 1 ] . ' ' . $medium;
}

$saat1 = '01:16';
$saat2 = '03:30';
$saat3 = '23:05';

echo talkTime( $saat1 );