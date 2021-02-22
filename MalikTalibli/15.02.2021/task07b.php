<?php

$text1  = '14.02.2021';
$text2  = '22-06.1993';
$simvol = '.';

function exploded ( $text )
{

	$a     = '';
	$array = [];

	for ( $j = 0; isset( $text[ $j ] ); $j++ )
	{

	}

	$j -= 1;

	if ( $text[ $j ] != '.' )
	{
		$text .= '.';
	}

	for ( $i = 0; $i <= $j + 1; $i++ )
	{

		if ( $text[ $i ] != '.' )
		{
			$a .= $text[ $i ];
		}
		else
		{
			$array[] = $a;
			$a       = '';
		}
	}

	return print_r( $array );

}

exploded( $text1 );

?>
