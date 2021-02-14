<?php

$x   = 4;
$y   = 6;
$str = 'Bu gunluk son tapshiriq.';
for ( $i = $x - 1; $i < $x + $y - 1; $i++ )
{
	if ( $str[ $i ] )
	{
		echo $str[ $i ];
	}
	else
	{
		break;
	}
}
?>
