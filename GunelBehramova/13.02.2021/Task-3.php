<?php

$x = 4;
$y = 6;

$text = "Bu gunluk son tapshiriq.";

$output = str_split( $text );

for ( $i = $x - 1; $i < $x + $y; $i++ )
{
	echo $output[ $i ];
};

?>