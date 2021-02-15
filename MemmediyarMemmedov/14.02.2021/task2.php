<?php

$x    = '03:30';
$time = explode( ':', $x );
if ( $time[ 0 ] > 12 )
{
	$time[ 0 ] = ( $time[ 0 ] - 12 );
}
else
{
	$time[ 0 ] = $time[ 0 ];
}
echo implode( ':', $time ) . '<br>';