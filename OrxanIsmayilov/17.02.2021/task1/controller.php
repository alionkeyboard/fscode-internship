<?php

session_start();

if ( isset( $_GET[ 'color' ] ) && $_GET[ 'color' ] == $_SESSION[ 'color' ] )
{
	echo 'success';
}
else
{
	echo "danger";
}