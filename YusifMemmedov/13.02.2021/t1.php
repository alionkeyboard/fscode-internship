<?php

$str           = 'Bu cumlede tam-tamina alti soz var';
$count         = 0;
$last_is_empty = TRUE;
$i             = 0;
while ( $str[ $i ] )
{
	if ( ! $last_is_empty && $str[ $i ] == ' ' )
	{
		$count++;
	}
	$last_is_empty = ( $str[ $i ] == ' ' );
	$i++;
}
echo ( $last_is_empty ) ? $count : $count + 1;

/*
eger boshluq olmayan simvoldan sonra boshluq gelse
bunu yeni soz kimi qebul edir
*/
?>
