<?php

//cURL configuration
$url = "";
if ( isset( $_POST[ "url" ] ) )
{
	$url = $_POST[ "url" ];;
}
$curl = curl_init();
curl_setopt( $curl, CURLOPT_URL, $url );
curl_setopt( $curl, CURLOPT_HEADER, 0 );
curl_setopt( $curl, CURLOPT_RETURNTRANSFER, 1 );
curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, FALSE );
curl_setopt( $curl, CURLOPT_BINARYTRANSFER, 1 );
$page = curl_exec( $curl );

function get_follow_count ( $curl, $url, $page )
{
	$regexFollow = '/<meta property="og:description" content="(.*) Followers, (.*) Following, (.*) Posts - (.*)" \/>/s';
	preg_match_all( $regexFollow, $page, $followCount );
	$follower  = $followCount[ 1 ][ 0 ];
	$following = $followCount[ 2 ][ 0 ];
	$posts     = $followCount[ 3 ][ 0 ];

	return "<br>" . "<strong>Follower:</strong>  " . $follower . "<br>" . "<strong>Following: </strong> " . $following . "<br>" . "<strong>Posts:</strong> " . $posts . "<br>";
}

function get_username ( $curl, $url, $page )
{
	$regexName = '/<meta property="al:ios:url" content="instagram:\/\/user\?username=(.*?)" \/>/s';
	preg_match_all( $regexName, $page, $username );
	$str = $username[ 1 ][ 0 ];
	echo "<br>" . "<strong>Username:</strong>  " . $str;
}

function get_user_bio ( $curl, $url, $page )
{
	$regexBio = '/<script type="text\/javascript">window._sharedData = (.*)"biography":"(.*)","blocked_by_viewer"(.*)<\/script>/s';
	preg_match_all( $regexBio, $page, $bio );
	$biography = $bio[ 2 ][ 0 ];
	$biography = trim( str_replace( '\n', ' ', $biography ) );
	$biography = preg_replace( "/U\+([0-9a-f]{4,5})/mi", '&#x${1}', $biography );
	echo "<strong>Biography:</strong>  " . utf8_decode( implode( json_decode( '["' . $biography . '"]' ) ) ) . "<br>";
}

function get_user_image ( $curl, $url, $page )
{
	$regexImage = '/<meta property="og:image" content="(.*?)" \/>/s';
	preg_match_all( $regexImage, $page, $image );
	$image     = $image[ 1 ][ 0 ];
	$imageData = base64_encode( file_get_contents( $image ) );
	echo '<img src="data:image/jpeg;base64,' . $imageData . '" width="150" height="150" >';
}

?>
