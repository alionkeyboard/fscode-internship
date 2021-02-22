<?php

if ( isset( $_POST[ 'username' ] ) )
{
	$username = $_POST[ 'username' ];
	$url      = "https://www.instagram.com/$username/?__a=1";

	$file_headers = @get_headers( $url );

	if ( $file_headers[ 0 ] == 'HTTP/1.1 404 Not Found' )
	{
		return FALSE;
	}
	else
	{
		$site = json_decode( file_get_contents( $url ) );

		$profile_pic = $site->graphql->user->profile_pic_url;
		$name        = $site->graphql->user->username;
		$description = $site->graphql->user->biography;
		$followers   = $site->graphql->user->edge_followed_by->count;
		$following   = $site->graphql->user->edge_follow->count;
		$posts       = $site->graphql->user->edge_owner_to_timeline_media->count;

	}
}




