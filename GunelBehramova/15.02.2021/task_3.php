<?php

$array = [
	'cixarin',
	'keyfini',
	'gunun',
	'bu'
];

echo '[' . '<br>';

for ( $i = count( $array ) - 1; $i >= 0; $i-- )
{
	print( " ' " . $array[ $i ] ) . " ', " . '<br>';

}

echo ']';

?>