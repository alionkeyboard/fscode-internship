<?php

function tarix ( $str )
{

	$aylar = [
		'Yanvar',
		'Fevral',
		'Mart',
		'Aprel',
		'May',
		'Iyun',
		'Iyul',
		'Avqust',
		'Sentyabr',
		'Noyabr',
		'Oktyabr',
		'Dekabr'
	];

	list( $gun, $ay, $il ) = explode( '-', $str );

	echo (int) $gun . ' ' . $aylar[ $ay - 1 ] . ', ' . $il;

	echo '<br>';
}

tarix( '07-04-2000' );
tarix( '12-5-1997' );

?>