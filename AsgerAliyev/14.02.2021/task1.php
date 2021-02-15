<?php

$text = '  Azerbayycan  ';

$text = strtolower( trim( $text ) );
$i    = 0;
$arr  = [];

while ( isset( $text[ $i ] ) )
{
	$letter = $text[ $i ];

	if ( isset( $arr[ $letter ] ) )
	{
		$arr[ $letter ]++;
	}
	else
	{
		$arr[ $letter ] = 1;
	}

	$i++;
}

foreach ( $arr as $key => $val )
{
	$boyuk = 0;

	foreach ( $arr as $v ) //en boyuyu tapan loop
	{
		if ( $v > $boyuk )
		{
			$boyuk = $v;
		}
	}

	foreach ( $arr as $k => $v ) // en boyuyu  yeni array-e elave edib, kohne array-den silen  loop
	{
		if ( $v === $boyuk )
		{
			$newarr[ $k ] = $boyuk;
			unset( $arr[ $k ] );
		}
	}
}

foreach ( $newarr as $k => $v )
{
	echo $k . ' : ' . $v . '<br>';
}