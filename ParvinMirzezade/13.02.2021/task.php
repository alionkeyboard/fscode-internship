<?php

$text = 'Bu cumlede tam-tamina alti soz var.';

function hesablacumle ( $text )
{
	$y         = "";
	$sozunsayi = 0;
	$index     = 0;

	while ( $text != $y )
	{
		$y .= $text[ $index ];

		if ( $text[ $index ] == " " )
		{
			$sozunsayi++;
		}

		$index++;
	}

	$sozunsayi++;

	return $sozunsayi;
}

echo hesablacumle( $text );

?>