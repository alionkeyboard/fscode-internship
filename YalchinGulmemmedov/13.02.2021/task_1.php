<?php

function word_count ( $text )
{
	$text    = trim( $text );
	$pattern = '/[^a-z0-9-]/';
	$result  = preg_split( $pattern, $text, -1, PREG_SPLIT_NO_EMPTY );

	for ( $i = 0; $i < count( $result ); $i++ )
	{
		$result[ $i ] = trim( $result[ $i ] );
	}

	return $result;
}

$text = 'Bu cumlede tam-tamina alti soz var';

echo count( word_count( $text ) );
?>