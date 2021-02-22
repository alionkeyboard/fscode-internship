<?php

ini_set( 'display_errors', 1 );
ini_set( 'display_startup_errors', 1 );
error_reporting( E_ALL );

//bu funskiya verilmish insta url-i oxuyub
//neticede istifadechinin melumatini qaytarir
function insta_parse ( $url )
{

	//url-i json url-e yonlendirmek
	list( $url, ) = explode( '?', $url );
	$url = trim( $url, ' ' );
	$url = trim( $url, '/' );
	$url .= '/?__a=1';

	//verilmish url-i oxuyuruq
	$json_string = file_get_contents( $url );
	$json        = json_decode( $json_string );

	$user_name     = 'Username: ' . $json->graphql->user->username;
	$full_name     = 'Full name: ' . $json->graphql->user->full_name;
	$post_count    = 'Posts: ' . $json->graphql->user->edge_owner_to_timeline_media->count;
	$followers     = 'Followers: ' . $json->graphql->user->edge_followed_by->count;
	$following     = 'Followed by: ' . $json->graphql->user->edge_follow->count;
	$bio           = 'BIO: ' . $json->graphql->user->biography;
	$profile_image = $json->graphql->user->profile_pic_url_hd;

	//javascriptle ishleyende murekkeblik olmasin deye iki array yaradib onlari birge json kimi qaytariram
	$info = [
		$user_name,
		$full_name,
		$post_count,
		$followers,
		$following,
		$bio
	];

	$insta_user = [
		'info'          => $info,
		'profile_image' => $profile_image
	];

	return json_encode( $insta_user );

}

//requeste verilen response
if ( isset( $_REQUEST[ 'url' ] ) )
{
	echo insta_parse( $_REQUEST[ 'url' ] );
}

?>