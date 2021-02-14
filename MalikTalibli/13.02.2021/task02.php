<?php

$text = 'suretli kod yazmaq her zaman daha yaxshi kod yazmaq demek deyil.   seliqeye ve hellin optimalligina da fikir verilmelidir.';

echo strtoupper( $text[ 0 ] );//bir herfi cevirmekcun istifade olunub

for ( $i = 1; isset( $text[ $i ] ); $i++ )
{

	if ( $text[ $i ] === '.' )
	{

		echo $text[ $i ];

		$i += 1;

		if ( isset( $text[ $i ] ) and $text[ $i ] == ' ' )
		{
			echo $text[ $i ];
			$i += 1;
			for ( $i; $text[ $i ] == ' '; $i++ )
			{
				$i += 1;
			}
		}

		if ( isset( $text[ $i ] ) )
		{
			echo strtoupper( $text[ $i ] );//bir herfi cevirmekcun istifade olunub
		}

		$i += 1;
	}

	if ( isset( $text[ $i ] ) )
	{
		echo $text[ $i ];
	}

}

?>