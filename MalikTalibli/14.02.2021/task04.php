<?php

$text = 'proqramlasdirma';

for ( $s = 0; isset( $text[ $s ] ); $s++ )
{

}

for ( $h = 0; $h < $s; $h++ )
{

	$count = 1;

	$n = $h + 1;

	for ( $n; $n < $s; $n++ )
	{

		if ( $text[ $n ] === $text[ $h ] )
		{

			$count++;

			$text[ $n ] = 0;

		}

	}

	if ( $text[ $h ] != 0 )
	{

		echo $text[ $h ] . '->' . $count;

		echo ' ';

	}

}

?>