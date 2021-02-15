<?php

// 1-ci tapsiriq
$text = 'proqrAmlasdirma';
function countLetters ( $text )
{
	$list = [];
	$i    = 0;
	while ( isset( $text[ $i ] ) )
	{
		if ( isset( $list[ $text[ $i ] ] ) )
		{
			$list[ $text[ $i ] ] = $list[ $text[ $i ] ] + 1;
		}
		else
		{
			$list[ $text[ $i ] ] = 1;
		}
		$i++;
	}

	return $list;

}

echo "<pre>";
print_r( countLetters( $text ) );
echo "</pre>";

//EXPLODE
function myExplode ( $delimeter, $text )
{
	$i    = 0;
	$list = [];
	$str  = ' ';
	while ( isset( $text[ $i ] ) )
	{
		if ( $text[ $i ] == $delimeter )
		{
			$list[] = $str;
			$str    = " ";
		}
		else
		{
			$str = $str . $text[ $i ];
		}
		$i++;
	}
	if ( $str != $delimeter )
	{
		$list[] = $str;
	}

	return $list;
}

// 2-ci tapsiriq
$saat1 = '13:07';
function timeConvert ( $time )
{
	$list          = myExplode( ':', $time );
	$convertedTime = " ";
	if ( $list[ 0 ] > 12 )
	{
		if ( ( $list[ 0 ] - 12 ) <= 9 )
		{
			$convertedTime = '0' . ( $list[ 0 ] - 12 ) . ":" . $list[ 1 ] . 'AM';
		}
		$hour = $list[ 0 ] - 12;
		if ( $hour < 10 )
		{
			$hour = "0$hour";
		}
		$convertedTime = "$hour:$list[1]AM";
	}
	else if ( (int) $list[ 0 ] >= 12 && (int) $list[ 1 ] > 0 )
	{
		$convertedTime = $time . 'PM';
	}
	else
	{
		$convertedTime = $time . 'AM';
	}

	return $convertedTime;
}

print_r( timeConvert( $saat1 ) . "<br>" );

// 3-cu tapsiriq
$date = '14-02-2021';
function dateConvert ( $date )
{
	$list          = myExplode( '-', $date );
	$convertedDate = " ";
	$months        = [
		'Yanvar',
		'Fevral',
		'Mart',
		'Aprel',
		'May',
		'Iyun',
		'Iyul',
		'Avqust',
		'Sentyabr',
		'Oktyabr',
		'Noyabr',
		'Dekabr'
	];
	foreach ( $months as $k => $v )
	{
		if ( (int) ( $list[ 1 ] - 1 ) == $k )
		{
			$convertedDate = (int) $list[ 0 ] . ' ' . $v . ',' . $list[ 2 ];
		}
	}

	return $convertedDate;
}

print_r( dateConvert( $date ) . '<br>' );
