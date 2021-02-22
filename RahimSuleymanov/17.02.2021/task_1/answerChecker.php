<?php

session_start();
if ( isset( $_POST[ 'guestAnswer' ] ) )
{
	if ( $_POST[ 'guestAnswer' ] === $_SESSION[ 'answer' ] )
	{
		echo 'true';
	}
	else
	{
		echo 'false';
	}
}
else
{
	header( 'location:task_1.php' );
}