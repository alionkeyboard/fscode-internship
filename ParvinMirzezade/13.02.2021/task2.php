<?php

$text = 'Bu gunluk son tapshiriq.';

function soztap ( $text )
{
	$text    = trim( $text );
	$uzunluq = 10;
	$netice  = '';
	for ( $i = 3; $i < $uzunluq; $i++ )
	{
		$netice .= $text[ $i ];
	}

	return $netice;
}

echo soztap( $text );

?>
