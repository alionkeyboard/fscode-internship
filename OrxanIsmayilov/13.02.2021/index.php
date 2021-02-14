<?php
// 1-ci Tapsiriq

$text = 'Bu cumlede 5 soz    var';
function countWords ( $text )
{
	$str  = "";
	$i    = 0;
	$list = [];
	while ( isset( $text[ $i ] ) )
	{
		if ( $text[ $i ] == " " )
		{
			if ( $str != "" )
			{
				$list[] = $str;
				$str    = '';
			}
		}
		else
		{
			$str = $str . $text[ $i ];
		}
		$i++;
	}
	if ( $str != " " )
	{
		$list[] = $str;
	}

	return count( $list );
}

print_r( countWords( $text ) . "<br>" );

//2-ci tapsiriq
$text = "Hello world";

function strSplit ( $text, $x, $y )
{
	$str = "";
	for ( $i = 0; $i < $y; $i++ )
	{
		$str .= $text[ $x + $i ];
	}

	return $str;
}

print_r( strSplit( $text, 1, 5 ) . "<br>" );

// 3-cu tapsiriq

$content = "suretli kod yazmaq.        seliqeye diqqet etmek";

function upperFirstLetter ( $content )
{
	$str  = "";
	$list = [];
	$i    = 0;
	while ( isset( $content[ $i ] ) )
	{
		if ( $content[ $i ] == '.' )
		{
			$list[] = $str;
			$str    = "";
		}
		else
		{
			$str = $str . $content[ $i ];
		}
		$i++;
	}

	if ( $str != '.' )
	{
		$list[] = $str;
	}

	$length    = count( $list );
	$listUpper = [];
	for ( $i = 0; $i < $length; $i++ )
	{

		$listUpper[] = ucfirst( ltrim( $list[ $i ] ) );
	}

	$len  = count( $listUpper );
	$text = "";
	for ( $i = 0; $i < $len; $i++ )
	{
		if ( $i == 0 )
		{
			$text = $listUpper[ $i ];
		}
		else
		{
			$text = $text . '. ' . $listUpper[ $i ];
		}
	}

	return $text;

}

print_r( upperFirstLetter( $content ) );
