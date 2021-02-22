<?php

ini_set( 'display_errors', 1 );
ini_set( 'display_startup_errors', 1 );
error_reporting( E_ALL );

//bu saytda melumatlari cedvelin icinde veribler
//birinci row-nun td-lerini goturub
//sagha sola chevirib kenarlarini temizleyirem
function air ()
{
	$a = file_get_contents( 'https://www.havaproqnozu.com/baki-15-gunluk-hava-veziyyeti-taxmini.html' );

	$pattern = "/<tr>(.*)<\/tr>/s";
	$data    = '';
	if ( preg_match( $pattern, $a, $matches ) )
	{
		$data = $matches[ 1 ];
	}

	list( $data, ) = explode( '</tr>', $data, 2 );

	$asagi = $yuxari = $hiss = $nem = $kulek = $cixma = $batma = '';

	list( , , $asagi, $yuxari, $hiss, $nem, $kulek, $cixma, $batma ) = explode( '</td>', $data );

	$qarisiq_melumat = [ $asagi, $yuxari, $hiss, $nem, $kulek, $cixma, $batma ];

	$hava_melumati = [];

	foreach ( $qarisiq_melumat as $melumat )
	{
		$melumat = strrev( $melumat );
		list( $melumat, ) = explode( '>"', $melumat, 2 );
		$melumat = strrev( $melumat );
		list( $melumat, ) = explode( '</', $melumat, 2 );
		$melumat = trim( $melumat );

		$hava_melumati[] = $melumat;
	}

	return json_encode( $hava_melumati );
}

echo air();
?>