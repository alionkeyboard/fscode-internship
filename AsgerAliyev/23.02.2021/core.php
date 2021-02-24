<?php

if ( isset( $_POST[ 'image_url' ] ) )
{
	$image_url = $_POST[ 'image_url' ];

	print_r( $image_url );
//	$sql = "INSERT INTO pictures image_url VALUE ?";
//	$pdo->prepare( $sql )->execute( $image_url );

}