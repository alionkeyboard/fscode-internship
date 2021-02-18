<?php

function elementi_goster($array, $index)
{
	
	foreach ($array as $index){
	echo $index;
	}
}

$array = [
	'key' => 'value',
	'key1' => 'value2'
	
	];

echo elementi_goster ($array, 0);

?>