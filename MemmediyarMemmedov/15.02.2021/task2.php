<?php

$text   = [ 'Baku', 'Moscow', 'Istanbul' ];
$t      = implode( ',', $text );
$axtar1 = 'Berlin';
$axtar2 = 'Istanbul';
if ( preg_match( "/{$axtar2}/", $t ) )
{
	echo 'true';
}
else
{
	echo 'false';
}