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

	return json_decode( $data, TRUE );
}

if ( isset( $_POST[ 'link' ] ) )
{
	$link = $_POST[ 'link' ] . '?__a=1';

	$output = '';

	$data = get_data( $link );
	if ( count( (array) $data ) )
	{
		$full_name = $data[ 'graphql' ][ 'user' ][ 'full_name' ];
		$followers = $data[ 'graphql' ][ 'user' ][ 'edge_followed_by' ][ 'count' ];
		$following = $data[ 'graphql' ][ 'user' ][ 'edge_follow' ][ 'count' ];
		$bio       = $data[ 'graphql' ][ 'user' ][ 'biography' ];
		$profile   = $data[ 'graphql' ][ 'user' ][ 'profile_pic_url' ];

		$output = ' Name: ' . $full_name . '<hr/>';
		$output .= ' Followers: ' . $followers . '<hr/>';
		$output .= ' Following: ' . $following . '<hr/>';
		$output .= ' Bio: ' . $bio . '<hr/>';
		$output .= ' Profile image: <img src="' . $profile . '" />';
	}
	else
	{
		$output = 'Belə bir istifadəçi tapılmadı!';
	}

	echo $output;
}
else
{
	header( 'location:task_1.php' );
}