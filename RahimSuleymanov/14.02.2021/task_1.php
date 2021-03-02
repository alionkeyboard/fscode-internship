<?php
/**
 * 1) Verilmiş textdəki hərfləri işlənmə sayına görə yuxarıdan aşağı doğru çap edən proqram. Array və for, vvhile, foreach istifadə edə bilərsiz. array_*, substr, strlen istifadə etmək olmaz.
 */

function myRsort ( $text = NULL )
{
	$loop        = TRUE;
	$diffLetters = [];
	$n           = 0;
	$myIn_array  = FALSE;
	while ( $loop === TRUE )
	{
		if ( isset( $text[ $n ] ) )
		{
			// different letter
			if ( ! empty( $diffLetters ) )
			{
				foreach ( $diffLetters as $diffLetter => $value )
				{
					if ( $diffLetter == $text[ $n ] )
					{
						$myIn_array                 = TRUE;
						$diffLetters[ $text[ $n ] ] = $value + 1;
					}
				}
			}

			if ( $myIn_array !== TRUE )
			{
				$diffLetters[ $text[ $n ] ] = 1;
			}
			$myIn_array = FALSE;
			$n++;
		}
		else
		{
			$loop = FALSE;
		}
	}

	//    echo '<pre>';
	//    return $diffLetters;

	//elementleri indeksledim
	$output      = [];
	$bridgeArray = [];
	foreach ( $diffLetters as $diffLetter => $value )
	{
		$bridgeArray[ $diffLetter ] = $value;
		$output[]                   = $bridgeArray;
		$bridgeArray                = [];
	}

	//Massivde herflerin sayina gore tersine duzdum
	for ( $i = 0; $i < count( $output ); $i++ )
	{
		foreach ( $output[ $i ] as $letter1 => $value1 )
		{
			for ( $j = 0; $j < count( $output ); $j++ )
			{
				foreach ( $output[ $j ] as $letter2 => $value2 )
				{
					if ( $value1 > $value2 )
					{
						$tem          = $output[ $i ];
						$output[ $i ] = $output[ $j ];
						$output[ $j ] = $tem;
					}
				}
			}
		}
	}

	echo '<pre>';

	return $output;
}

$text = 'Programming';
print_r( myRsort( $text ) );