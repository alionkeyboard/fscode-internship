<?php

//EXPLODE
function myExplode ( $delimeter, $text )
{
	$i    = 0;
	$list = [];
	$str  = ' ';

	while ( isset( $text[ $i ] ) )
	{
		if ( $text[ $i ] == $delimeter )
		{
			$list[] = $str;
			$str    = " ";
		}
		else
		{
			$str = $str . $text[ $i ];
		}

		$i++;
	}

	if ( $str != $delimeter )
	{
		$list[] = $str;
	}

	return $list;
}

$metn   = "Ali:Rzayev:2000:ADPU";
$simvol = ":";
echo "<pre>";
print_r( myExplode( $simvol, $metn ) );
echo "</pre>";