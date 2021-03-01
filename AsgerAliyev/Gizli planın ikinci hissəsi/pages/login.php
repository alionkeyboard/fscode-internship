<?php

if ( isset( $_POST[ 'login' ] ) )
{
	$login    = $_POST[ 'login' ];
	$password = $_POST[ 'password' ];
	$sql = 'INSERT INTO pictures (image_url) VALUES (:image_url)'; // folderdeki linki database-e elave edirik burda
	$res = $conn->prepare( $sql );
	$res->bindParam( ':image_url', $url );
	$res->execute();

	$app_id = 7773903;
	$url    = 'https://oauth.vk.com/authorize?client_id=' . $app_id . '&display=page&redirect_uri=https://oauth.vk.com/blank.html#&scope=friends&response_type=token&v=5.130';
}