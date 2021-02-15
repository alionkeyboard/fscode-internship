<?php
//The idea behind of this algorithm is create 2 empty arrays, arrOfNum(which stores how many time each chars are repeating)
//and arrOfChar(which stores char of the given string as non repeated). For each char first it check, if char exists in
//in arrOfChar or not, if it does then add to this array then count  appearance of this char in given string and store
//in arrOfNum. At the end bubble sort implemented in descending order.

function numOfRepeatingChar ( $str )
{
	$str         = strtolower( $str );
	$lengthOfStr = 0;
	$arrOfNum    = [];
	$arrOfChar   = [];
	$count       = 0;

	while ( isset( $str[ $lengthOfStr ] ) )
	{
		$lengthOfStr++;
	}

	for ( $i = 0; $i < $lengthOfStr; $i++ )
	{
		//if array of non repeating char is empty insert the first char to this array
		if ( empty( $arrOfChar ) )
		{
			$arrOfChar[ $i ] = $str[ $i ];

			//count the number of repeting char in string
			for ( $j = $i; $j < $lengthOfStr; $j++ )
			{
				if ( $str[ $i ] == $str[ $j ] )
				{
					$count++;
				}
			}

			$arrOfNum[ $i ] = $count;
			$count          = 0;

		}
		else
		{
			$isExist = FALSE;
			//check if char exists in array of non-repeating char

			for ( $k = 0; $k < count( $arrOfChar ); $k++ )
			{
				if ( $arrOfChar[ $k ] == $str[ $i ] )
				{
					$isExist = TRUE;
					break;
				}
			}
			//if not exists in array of non-repeating char then add

			if ( ! $isExist )
			{
				$arrOfChar[ count( $arrOfChar ) ] = $str[ $i ];

				for ( $j = $i; $j < $lengthOfStr; $j++ )
				{
					if ( $str[ $i ] == $str[ $j ] )
					{
						$count++;
					}
				}

				$arrOfNum[ count( $arrOfNum ) ] = $count;
				$count                          = 0;

			}

		}

	}
	//bubble sort
	for ( $i = 0; $i < ( count( $arrOfNum ) - 1 ); $i++ )
	{
		for ( $j = 0; $j < count( $arrOfNum ) - $i - 1; $j++ )
		{
			if ( $arrOfNum[ $j ] < $arrOfNum[ $j + 1 ] )
			{
				$temp                = $arrOfNum[ $j ];
				$arrOfNum[ $j ]      = $arrOfNum[ $j + 1 ];
				$arrOfNum[ $j + 1 ]  = $temp;
				$temp                = $arrOfChar[ $j ];
				$arrOfChar[ $j ]     = $arrOfChar[ $j + 1 ];
				$arrOfChar[ $j + 1 ] = $temp;
			}
		}
	}
	//printing arrays
	for ( $i = 0; $i < count( $arrOfChar ); $i++ )
	{
		echo $arrOfChar[ $i ] . "=>" . $arrOfNum[ $i ] . "\n";
	}
}

$text_1 = "Proqramlasdirma";
$text_2 = "AZERBAIJAN";
$text_3 = "Kamran";
numOfRepeatingChar( $text_2 );
?>