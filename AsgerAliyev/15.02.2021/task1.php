<?php

function divider ( $text, $symbol )
{
	$text = trim( $text ) . $symbol;
	$a    = 0;

	for ( $i = 0; isset( $text[ $i ] ); $i++ )
	{
		if ( $text[ $i ] === $symbol )
		{
			$data = '';

			for ( $j = $a; $j < $i; $j++ )
			{
				$data .= $text[ $j ];
			}

			$tarr[] = $data;
			$a      = $i + 1;
		}
	}

	return $tarr;
}

$text   = 'Asker:Aliyev:2002:BDU';
$symbol = ':';

print_r( divider( '', $symbol ) );