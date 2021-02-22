<?php

function getJSON ( $url )
{
	$json = file_get_contents( $url );

	return json_decode( $json, TRUE );
}

function getUserBiography ( $data )
{
	return $data[ 'graphql' ][ 'user' ][ 'biography' ];
}

function getUserProfilePic ( $data )
{
	return $data[ 'graphql' ][ 'user' ][ 'profile_pic_url' ];
}

function getUserFollowCount ( $data )
{
	return $data[ 'graphql' ][ 'user' ][ 'edge_follow' ][ 'count' ];
}

function getUserFollowersCount ( $data )
{
	return $data[ 'graphql' ][ 'user' ][ 'edge_followed_by' ][ 'count' ];
}

function getUserFullName ( $data )
{
	return $data[ 'graphql' ][ 'user' ][ 'full_name' ];
}

function getUserNumberOfPosts ( $data )
{
	return $data[ 'graphql' ][ 'user' ][ 'edge_owner_to_timeline_media' ][ 'count' ];
}

function getUserPosts ( $data )
{
	return $data[ 'graphql' ][ 'user' ][ 'edge_owner_to_timeline_media' ][ 'edges' ];
}

if ( $_POST[ 'username' ] != "" )
{

	$data = getJSON( ( "https://www.instagram.com/" . $_POST[ 'username' ] . "/?__a=1" ) );
	if ( $data == NULL )
	{
		$noUser = "User does not exist!";
	}
	else
	{
		$img            = getUserProfilePic( $data );
		$bio            = getUserBiography( $data );
		$fullName       = getUserFullName( $data );
		$followCount    = getUserFollowCount( $data );
		$followersCount = getUserFollowersCount( $data );
		$posts          = getUserPosts( $data );
		if ( empty( $posts ) )
		{
			$private = "Profile is private!";
		}
		// number operations on followers and following to convert to K or M
		if ( $followersCount >= 10000 && $followersCount < 1000000 )
		{
			$followersCount = round( ( $followersCount / 1000 ), 1 );
			$followersCount = $followersCount . "K followers";

		}
		else if ( $followersCount >= 10000000 )
		{
			$followersCount = round( ( $followersCount / 1000000 ), 1 );
			$followersCount = $followersCount . "M followers";

		}
		else
		{
			$followersCount = number_format( $followersCount ) . " followers";
		}

		if ( $followCount >= 10000 && $followCount < 1000000 )
		{
			$followCount = round( ( $followCount / 1000 ), 1 );
			$followCount = $followCount . "K following";
		}
		else if ( $followCount >= 1000000 )
		{
			$followCount = round( ( $followersCount / 1000000 ), 1 );
			$followCount = $followCount . "M following";
		}
		else
		{
			$followCount = number_format( $followCount ) . " following";
		}

		$numberOfPosts = number_format( getUserNumberOfPosts( $data ) ) . " posts";
	}
}
