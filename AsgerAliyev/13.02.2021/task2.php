<?php

$text      = ' bu metndeki butun cumleler balaca herfle bashlayirdi. ta ki bir proqram bu yalnishi duzeldene qeder. artiq her bir cumle boyuk herfle bashlayacaq';
$text      = trim( $text );
$i         = 0;
$text[ 0 ] = strtoupper( $text[ 0 ] );
while ( isset( $text[ $i ] ) )
{
	if ( $text[ $i ] === '.' )
	{
		$j = 1;
		while ( isset( $text[ $i + $j ] ) ) // noqteden sonraki ilk herfi tapan funksiya
		{
			if ( $text[ $i + $j ] !== ' ' )
			{
				$text[ $i + $j ] = strtoupper( $text[ $i + $j ] );
				break;
			}
			else
			{
				$j++;
			}
		}
	}
	$i++;
}
echo $text;