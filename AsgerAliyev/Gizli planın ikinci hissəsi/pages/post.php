<?php

if ( isset( $_POST[ 'title' ] ) )
{
	$title = $_POST[ 'title' ];
	$post  = $_POST[ 'post' ];
	$getUsers =  $conn->prepare( 'SELECT * FROM users' );
	$getUsers->execute();
	$Users = $getUsers->fetchAll();

	foreach ( $Users as $user )
	{
		if ( $user[''] ){
			echo '';
		}
	}
}