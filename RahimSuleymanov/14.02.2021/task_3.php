<?php
/**
 * 3) gün-ay-il formasında verilmiş tarixi gün, Ay il formatında çap edən proqram. Explode istifadə edə bilərsiniz.  array_* funksiyalarından istifadə etmək olmaz, amma array istifadə edə bilərsiz. date və bənzəri hazır funksiyalar olmaz.
 */

function myDate ( $date = NULL )
{
	$date    = explode( '-', $date );
	$months  = [
		'January',
		'February',
		'March',
		'April',
		'May',
		'June',
		'July',
		'August',
		'September',
		'October',
		'November',
		'December',
	];
	$convert = FALSE;
	if ( count( $date ) === 3 )
	{
		if ( ctype_digit( $date[ 0 ] ) && ctype_digit( $date[ 1 ] ) )
		{
			if ( $date[ 0 ] < 32 && $date[ 1 ] < 13 )
			{
				$date    = intval( $date[ 0 ] ) . ' ' . $months[ $date[ 1 ] - 1 ] . ', ' . $date[ 2 ];
				$convert = TRUE;
			}
		}
	}

	if ( $convert === FALSE )
	{
		return 'Please, enter right date format!';
	}

	return $date;
}

$tarix1 = '07-04-2000';
$tarix2 = '12-05-1977';
echo myDate( $tarix1 );