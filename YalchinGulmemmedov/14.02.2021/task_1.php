<?php

function charCount ( $text )
{
	$i          = 0;
	$countChars = [];
	while ( @$text[ $i ] != NULL )
	{
		if ( isset( $countChars[ $text[ $i ] ] ) )
		{
			$countChars[ $text[ $i ] ]++;

		}
		else
		{
			$countChars[ $text[ $i ] ] = 1;
		}
		$i++;
	}

	return $countChars;
}

$text = "proqramlasdirma";
echo '<pre>';
print_r( charCount( $text ) );

?>