<?php

function say ( $str = "Programlashdirma" )
{
	$herfler = [];                //$herf => $say sheklinde associative array

	$i          = 0;
	$array_size = 0;                   //$herfler arrayinin elementlerini saymaq uchun sayghac
	while ( isset( $str[ $i ] ) )
	{

		//eger herf arrayda vardirsa sayini artiririq
		//yoxdursa elave edib sayini =1 edirik
		if ( isset( $herfler[ $str[ $i ] ] ) )
		{
			$herfler[ $str[ $i ] ]++;      //movcud elemente tekrar rast geldikde sayini artiririq
		}
		else
		{
			$herfler[ $str[ $i ] ] = 1;    //arraya yeni element yaziriq
			$array_size++;                 //arrayin elementlerini sayiriq
		}

		$i++;
	}

	$herfler_indexed = [];        //$herfler arrayinin elementlerini nomreli key-leri olan arraya yighiriq

	foreach ( $herfler as $herf => $say )
	{
		$herfler_indexed[] = [ $herf, $say ];
	}

	//numeric indexli arrayi sortlashdiririq
	for ( $i = 0; $i < $array_size; $i++ )
	{

		for ( $j = 0; $j < $array_size - 1; $j++ )
		{

			if ( $herfler_indexed[ $j + 1 ][ 1 ] > $herfler_indexed[ $j ][ 1 ] )
			{

				$ara                       = $herfler_indexed[ $j + 1 ];
				$herfler_indexed[ $j + 1 ] = $herfler_indexed[ $j ];
				$herfler_indexed[ $j ]     = $ara;

			}

		}

	}

	foreach ( $herfler_indexed as $h )
	{
		echo $h[ 0 ] . ' => ' . $h[ 1 ] . '<br>';
	}
}

say();
echo '<hr>';
say( 'a' );
echo '<hr>';
say( 'salamlar' );
echo '<hr>';
say( 'development' );
?>
