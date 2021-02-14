<?php

$x   = 'Bu cumlede tam-tamina alti soz var.';
$n   = 0; //strlen əvəzi
$say = 1; //söz sayı
while ( isset( $x[ $n ] ) )
{
	echo $x[ $n ];

	if ( $x[ $n ] == " " )
	{
		$say++;
	}

	$n++;
}
echo "<br />" . $say . " soz";