<?php
/**
 * 1) Verilmiş textdə neçə sözün olduğunu hesablayan proqram. Hazır funksiyalardan ( explode və s. ) istifadə *etmək olmaz.
 */

function wordCounter ( $text = NULL )
{
	$spaceCounter = 0;
	$word         = '';
	$loop         = TRUE;
	$n            = 0;
	while ( $loop === TRUE )
	{
		if ( isset( $text[ $n ] ) )
		{
			if ( $text[ $n ] == ' ' )
			{
				$spaceCounter++;
				$word = '';
			}
			$word .= $text[ $n ];
			$n++;
		}
		else
		{
			$loop = FALSE;
		}
	}
	$wordCounter = $spaceCounter + 1;

	if ( $n === 0 )
	{
		return 'Please include a word';
	}

	return $wordCounter;
}

$text = 'Bu cumlede tami-tamina alti soz var';
echo wordCounter( $text );


