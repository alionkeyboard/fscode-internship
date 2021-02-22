<?php

function explode_pattern ( $pattern, $text )
{

	$arr = [];

	$str = "";

	$ignored = "";

	$count = 0;

	for ( $i = 0; $i < strlen( $text ); $i++ )
	{

		for ( $k = 0; $k < strlen( $pattern ); $k++ )
		{
			for ( $j = $i; $j < $i + strlen( $pattern ); $j++ )
			{
				if ( isset( $text[ $j ] ) )
				{
					$ignored = $ignored . $text[ $j ];
				}
			}
			if ( $ignored == $pattern )
			{
				$arr[ $count ] = $str;
				$str           = "";
				$count++;
				$ignored = "";

				$i = $i + strlen( $pattern ) - 1;

			}
			else
			{
				$str     = $str . $text[ $i ];
				$ignored = "";
				if ( $i == strlen( $text ) - 1 )
				{
					$arr[ $count ] = $str;
				}

			}
		}
	}

	return $arr;

}

$text    = 'Ali:Rzayev:2000:ADPU';
$pattern = ":";
echo '<pre>';
print_r( explode_pattern( $pattern, $text ) );
echo "<br>";

?>