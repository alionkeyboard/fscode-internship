<?php
/**
 * Verilmiş textdəki cümlələrin ilk hərfini böyüklə yazan proqram. Hazır funksiyalardan ( explode ) istifadə etmək olmaz.
 *
 * $text = ' suretli kod yazmaq her zaman daha yaxshi demek deyil.          seliqeye ve hellin optimalligina da fikir vermelidir';
 *
 */

function uppercase ( $text = NULL )
{
	$loop      = TRUE;
	$n         = 0;
	$sentence  = '';
	$uppercase = FALSE;//Bu bizə cümlənin əvvəlində və ya .(nöqtə) dən sonra  boşluqları nəzərə almaqçün
	// lazımdır
	while ( $loop === TRUE )
	{
		if ( isset( $text[ $n ] ) )
		{
			if ( $n === 0 )
			{
				$uppercase = TRUE;
			}
			else
			{
				if ( $text[ $n - 1 ] == '.' )
				{
					$uppercase = TRUE;

				}
			}

			if ( $uppercase === TRUE && $text[ $n ] != ' ' )
			{
				$sentence  .= strtoupper( $text[ $n ] );
				$uppercase = FALSE;
			}
			else
			{
				$sentence .= $text[ $n ];
			}

			$n++;
		}
		else
		{
			$loop = FALSE;
		}
	}

	if ( $n === 0 )
	{
		return 'Please include a sentence';
	}

	return $sentence;
}

$text = ' suretli kod yazmaq her zaman daha yaxshi demek deyil.          seliqeye ve hellin optimalligina da fikir vermelidir';

echo uppercase( $text );