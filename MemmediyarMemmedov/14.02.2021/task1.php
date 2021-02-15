<?php

$string = "proqramlasdirma";
foreach ( count_chars( $string, 1 ) as $i => $val )
{
	$count   = chr( $i );
	$array[] = $count . '=>' . $val . "<br>";
	$arr     = implode( '', $array );
}
print_r( $arr );
 



