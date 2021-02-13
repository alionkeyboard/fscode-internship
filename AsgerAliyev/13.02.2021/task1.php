<?php

$text = ' Bu cumle 6 sozden cox soze sahibdir        ';
$i    = 0;

if ( $text[ 0 ] === ' ' )
{
	$wordCount = 0;
}
else
{
	$wordCount = 1;
}

while ( isset( $text[ $i ] ) )
{
	if ( $text[ $i ] === ' ' ) // bir boshluq ve  bir herf yanashi olanda bir soz sayacaq
	{
		if ( $text[ $i + 1 ] !== ' ' )
		{
			$wordCount++;
		}
	}
	$i++;
}

echo $wordCount;