<?php

$arr   = [ 5, 6, 4, 8, 2, 3, 7 ];
$say   = 0;
$umumi = 0;
while ( ! empty( $arr[ $say ] ) )
{
	$say++;
}
for ( $i = 0; $i < $say; $i++ )
{
	$umumi += $arr[ $i ];
}
$avg = $umumi / $say;
print_r( $avg );
