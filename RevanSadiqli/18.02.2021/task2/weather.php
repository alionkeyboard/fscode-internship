<?php

// cURL  configuration
$curl = curl_init();
$url  = "https://www.havaproqnozu.com/baki-15-gunluk-hava-veziyyeti-taxmini.html";
curl_setopt( $curl, CURLOPT_URL, $url );
curl_setopt( $curl, CURLOPT_HEADER, 0 );
curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, FALSE );
curl_setopt( $curl, CURLOPT_BINARYTRANSFER, 1 );
$page = curl_exec( $curl );

function get_weather ( $curl, $url, $page )
{
	if ( ! curl_exec( $curl ) )
	{
		echo 'ERROR OCCURED: ' . curl_error( $curl );
	}
	else
	{   //getting the weather table for the current day
		$regex = '/<table class="col-md-12 table-bordered table-striped table-condensed cf">(.*?)<\/tr>/s';
		preg_match_all( $regex, $page, $list );
		curl_close( $curl );
		$weather = $list[ 0 ][ 0 ];
	}

	return $weather;
}

echo get_weather( $curl, $url, $page );
?>
