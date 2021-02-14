<?php

function findStringLength ( $text )
{
	$length = 0;
	while ( ! empty( $text[ $length ] ) )
	{
		$length++;
	}

	return $length;
}

function countWords ( $text )
{
	$wordCount         = 1;
	$SKIPPED_CHARACTER = " ";

	for ( $i = 0; $i < findStringLength( $text ); $i++ )
	{
		if ( $text[ $i ] == $SKIPPED_CHARACTER )
		{
			$wordCount++;
		}
	}

	return $wordCount;
}

$text = "Bum cumlede tam-tamina altı soz var";
echo countWords( $text );
?>
