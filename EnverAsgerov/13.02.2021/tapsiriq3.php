<?php

$x      = 4;
$y      = 6;
$text   = 'Bu gunluk son tapshiriq';
$newStr = "";
for ( $i = 3; $i <= 8; $i++ )
{

	$newStr .= $text[ $i ];
	echo $newStr;
}
