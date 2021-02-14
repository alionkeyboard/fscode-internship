<?php
/**
 * 3) Textin X-ci simvolundan başlayaraq Y qədər hərfi kəsib göstərən proqram. Hazır funksiyalardan ( substr, strlen ) istifadə etmək olmaz.
 */

function mySubStr ( $text = NULL, $start = 0, $length = NULL )
{
	$output = '';

	// Burada if Sizin 1 - ci hərfi 0 deyil 1 dən başlamasını dediyiniz üçün alındı
	if ( $start < 0 )
	{
		if ( isset( $text[ $start ] ) )
		{
			for ( $i = 0; $i < $length; $i++ )
			{
				if ( isset( $text[ $start + $i ] ) )
				{
					$output .= $text[ $start + $i ];
				}
				else
				{
					break;
				}
			}
		}
	}
	else
	{
		if ( isset( $text[ $start - 1 ] ) )
		{
			for ( $i = 0; $i < $length; $i++ )
			{
				if ( isset( $text[ $start + $i - 1 ] ) )
				{
					$output .= $text[ $start + $i - 1 ];
				}
				else
				{
					break;
				}
			}
		}
	}

	return $output;
}

$x    = -4;
$y    = 6;
$text = 'Bu gunluk son tapsiriq.';

echo mySubStr( $text, $x, $y );