<?php

/**
 * 2) Ədədin mənfi, müsbət və ya 0 olduğunu təyin edən funksiya.
 * Əgər verilən dəyər ədəd deyilsə funksiya bunu bildirsin. Məsələn,
 */

$eded1 = 15;
$eded2 = -8;
$eded3 = 0;
$eded4 = 'A4';

function getVariableName ( $var )
{ //dəyişən adını almaq üçün, məsələn dəyişən $x olarsa nəticə x olacaq

	foreach ( $GLOBALS as $varName => $value )
	{

		if ( $value === $var )
		{
			return $varName;
		}
	}
}

function Num ( $eded )
{
	$name = getVariableName( $eded );

	if ( is_numeric( $eded ) )
	{ //dəyişən ədəd olarsa

		if ( $eded > 0 )
		{
			$cavab = "$$name -> $eded müsbət ədəddir.";
		}

		else if ( $eded < 0 )
		{
			$cavab = "$$name -> $eded mənfi ədəddir.";
		}

		else
		{
			$cavab = "$$name -> 0 daxil etmisiniz.";
		}
	}

	else
	{ //dəyişən ədəd olmazsa
		$cavab = "$$name -> daxil etdiyiniz dəyər ədəd deyil.";
	}

	return $cavab . "<br />";
}

echo Num( $eded1 );
echo Num( $eded2 );
echo Num( $eded3 );
echo Num( $eded4 );

/**
 * $eded1 -> 15 müsbət ədəddir.
 * $eded2 -> -8 mənfi ədəddir.
 * $eded3 -> 0 daxil etmisiniz.
 * $eded4 -> daxil etdiyiniz dəyər ədəd deyil.
 */