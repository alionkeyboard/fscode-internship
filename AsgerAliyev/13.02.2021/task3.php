<?php

$x        = 7;
$y        = 6;
$text     = 'Burdan necese cumle kesilecek';
$new_text = '';

for ( $i = $x; $i < $x + $y; $i++ )
{
	$new_text .= $text[ $i ];
}

echo $new_text;