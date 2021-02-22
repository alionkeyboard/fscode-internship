<?php

if ( isset( $_POST[ 'float' ] ) )
{
	sleep( 1 );
	$output = '';
	$output .= 'İstifadəçinin daxil etdiyi ədəd = x ==>' . $_POST[ 'float' ];
	$output .= '<br/>';

	$output .= ' Natural ədəd < x ==>' . floor( $_POST[ 'float' ] ) . ' (' . ( $_POST[ 'float' ] - floor( $_POST[ 'float' ] ) ) . ')';
	$output .= '<br/>';

	$output .= ' Natural ədəd > x ==>' . ceil( $_POST[ 'float' ] ) . ' (' . ( ceil( $_POST[ 'float' ] ) - $_POST[ 'float' ] ) . ')';

	echo $output;
}
else
{
	header( 'location:task_2.php' );
}