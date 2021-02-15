<?php

$tarix1       = '07-04-2000';
$tarix2       = '12-05-1977';
$aylar        = [
	'01' => 'Yanvar',
	'02' => 'Fevral',
	'03' => 'Mart',
	'04' => 'Aprel',
	'05' => 'May',
	'06' => 'Iyun',
	'07' => 'Iyul',
	'08' => 'Avqust',
	'09' => 'Sentyabr',
	'10' => 'Oktyabr',
	'11' => 'Noyabr',
	'12' => 'Dekabr'
];
$tarix1_array = explode( '-', $tarix1 );
$tarix2_array = explode( '-', $tarix2 );
echo (int) $tarix1_array[ 0 ] . ' ' . $aylar[ $tarix1_array[ 1 ] ] . ' ' . $tarix1_array[ 2 ];
echo '<br>';
echo (int) $tarix2_array[ 0 ] . ' ' . $aylar[ $tarix2_array[ 1 ] ] . ' ' . $tarix2_array[ 2 ];
