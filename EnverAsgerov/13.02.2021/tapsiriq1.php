<?php

$text = 'Bu cumlede tam-tamina alti soz var.';
$n    = '1';
while ( $cavab = $text[ $n ] )
{
	$n++;
}
$t = '1';
for ( $i = 0; $i <= $n; $i++ )
{
	if ( $cavab = $text[ $i ] == " " )
	{
		$t++;
	}
}

echo $t;
?>