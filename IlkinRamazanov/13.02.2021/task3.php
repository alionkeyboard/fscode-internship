<?php

function getWord ( $text, $start, $end )
{
	$word = "";

	for ( $i = 0; $i < $end; $i++, $start++ )
	{
		$letter = $text[ $start - 1 ];
		$word   = $word . $letter;
	}

	return $word;
}

$text = "Bu gunluk son tapsiriq.";
$x    = 4;
$y    = 6;
print( getWord( $text, $x, $y ) );
?>
