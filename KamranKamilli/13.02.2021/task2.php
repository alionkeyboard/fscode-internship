<?php

function firstLetterUpperCase ( $str )
{
	$lengthOfStr = 0;
	$i           = 0;
	//length of the string
	while ( isset( $str[ $lengthOfStr ] ) )
	{
		$lengthOfStr++;
	}
	//iterates over each char until it finds dot
	while ( $i < $lengthOfStr - 1 )
	{
		if ( $i == 0 )
		{
			$str[ $i ] = strtoupper( $str[ $i ] . "" );
		}
		else if ( $str[ $i ] == '.' )
		{
			//if there are multiple space or tab or new line after dot
			while ( $str[ $i + 1 ] == ' ' || $str[ $i + 1 ] == "\n" || $str[ $i + 1 ] == "\t" )
			{
				$i++;
			}

			$str[ $i + 1 ] = strtoupper( $str[ $i + 1 ] . "" );
		}
		$i++;
	}

	return $str;
}

$text = "surekli kod yazmaq her zaman daha yaxshi kod yazmaq demek deyil.\n  seliqeye ve helin optimalligina da fikir verilmelidir";

print( firstLetterUpperCase( $text ) );
?>