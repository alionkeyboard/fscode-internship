<?php

function in_array_search ( $array, $search )
{
	$equal = FALSE;
	for ( $i = 0; $i < count( $array ); $i++ )
	{
		if ( $search == $array[ $i ] )
		{
			$equal = TRUE;

		}
	}
	if ( $equal === TRUE )
	{
		echo "true";
	}
	else
	{
		echo "false";
	}

}

$array  = [
	'baki',
	'gence',
	'lerik',
	'quba',

];
$search = "gece";
in_array_search( $array, $search );

?>