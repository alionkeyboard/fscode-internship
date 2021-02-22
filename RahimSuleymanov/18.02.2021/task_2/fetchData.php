<?php

function get_data ( $url )
{
	$ch      = curl_init();
	$timeout = 5;
	curl_setopt( $ch, CURLOPT_URL, $url );
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1 );
	curl_setopt( $ch, CURLOPT_CONNECTTIMEOUT, $timeout );
	//Update.................
	curl_setopt( $ch, CURLOPT_USERAGENT, 'spider' );
	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, FALSE );
	curl_setopt( $ch, CURLOPT_HEADER, FALSE );
	//....................................................
	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, FALSE );
	$data = curl_exec( $ch );
	curl_close( $ch );

	return $data;
}

if ( isset( $_POST[ 'link' ] ) )
{
	$output = '';

	$data = get_data( $_POST[ 'link' ] );
	if ( $data != NULL )
	{
		$thead = '@<thead class="cf" bgcolor="#F0F0FF">(.*?)</thead>@si';
		$tbody = '@<tr>(.*?)</tr>@si';

		preg_match_all( $thead, get_data( $_POST[ 'link' ] ), $resultThead );
		preg_match_all( $tbody, get_data( $_POST[ 'link' ] ), $resultTbody );

		$thead  = $resultThead[ 0 ][ 0 ];
		$tbody  = explode( 'src="', $resultTbody[ 0 ][ 0 ] );
		$tbody  = $tbody[ 0 ] . 'src="https://www.havaproqnozu.com/' . $tbody[ 1 ];
		$output = $thead . '' . $tbody;
	}
	else
	{
		$output = 'Bir şeylər yanliş gedir!! Biraz sonra yenidən cəhd edin ....';
	}

	echo $output;
}
else
{
	header( 'location:task_2.php' );
}
