<?php

$tarix1 = '12-02-2021';
$tarix2 = '23-05-2021';

function dateConverter ( $date )
{
	$aylar = [ 'Yanvar', 'Fevral', 'Mart', 'Aprel', 'May', 'Iyun', 'Iyul', 'Avqust', 'Sentyab', 'Noyabr', 'Dekabr' ];
	$arr   = explode( '-', $date );
	$ay    = $aylar[ $arr[ 1 ] - 1 ];

	return "$arr[0] $ay, $arr[2]";
}

echo dateConverter( $tarix2 );