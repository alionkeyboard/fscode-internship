<?php

function arrayRev ( $text )
{
	$len = count( $text );
	for ( $i = 0; $i < $len / 2; $i++ )
	{

		$rev = $text[ $i ];
		// cixardin
		//keyfini verir bura
		$text[ $i ] = $text[ $len - $i - 1 ];
		//bu
		//gunun verir nura

		$text[ $len - $i - 1 ] = $rev;

	}
	echo "<pre>";
	print_r( $text );
}

$text = [
	'cixardin',
	'keyfini',
	'gunun',
	'bu'
];
arrayRev( $text );

?>