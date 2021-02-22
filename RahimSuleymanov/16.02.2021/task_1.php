<?php
/**
 * 1) Aşağıdakı formada cədvələ uyğun array yaradılacaq və həmin array üzrə aşağıdakı sualları cavablayan proqram yazılacaq.
 */

$array = [
	[
		'ad'   => 'Nermin Eliyeva',
		'yash' => 12,
		'cins' => 'q',
	],

	[
		'ad'   => 'Kamil Rehimli',
		'yash' => 13,
		'cins' => 'k',
	],

	[
		'ad'   => 'Zaur Qurbaneliyev',
		'yash' => 12,
		'cins' => 'k',
	],

	[
		'ad'   => 'Melahet Isgenderli',
		'yash' => 12,
		'cins' => 'q',
	],

	[
		'ad'   => 'Ali Rzayev',
		'yash' => 11,
		'cins' => 'k',
	],
];

function myClass ( array $array )
{
	//    - Sinifdəki oğlanların və qızların sayı
	$boysCount  = 0; //oğlanların sayi
	$girlsCount = 0; //qızların sayi
	$avrAge     = 0; //orta yash
	$n          = 0; //umumi say
	$minAge     = [];//ən kiçik uşağın
	$maxAge     = [];//ən böyük  uşağın

	foreach ( $array as $item )
	{
		// Start - Sinifdəki oğlanların və qızların sayı
		if ( $item[ 'cins' ] == 'k' )
		{
			$boysCount++;
		}
		else
		{
			$girlsCount++;
		}
		// End - Sinifdəki oğlanların və qızların sayı

		//Start- Sinifdəki uşaqların ümumi yaş ortalaması
		$avrAge += $item[ 'yash' ];
		//End- Sinifdəki uşaqların ümumi yaş ortalaması

		// Start- Sinifdə ən kiçik və ən böyük uşağın adı, soyadı
		if ( $n == 0 )
		{
			$minAge[] = $item;
			$maxAge[] = $item;
		}
		else
		{
			if ( $minAge[ 0 ][ 'yash' ] > $item[ 'yash' ] )
			{
				$minAge   = [];
				$minAge[] = $item;
			}

			if ( $maxAge[ 0 ][ 'yash' ] < $item[ 'yash' ] )
			{
				$maxAge   = [];
				$maxAge[] = $item;
			}
		}
		// End- Sinifdə ən kiçik və ən böyük uşağın adı, soyadı

		// Start- Sinifdəki uşaqların ümumi sayı
		$n++;
		// End- Sinifdəki uşaqların ümumi sayı
	}

	// - Sinifdəki uşaqların ümumi yaş ortalaması
	$avrAge = $avrAge / $n;

	return '
    - Sinifdəki oğlanların = ' . $boysCount . ' və qızların sayı = ' . $girlsCount . '<br/>
    - Sinifdəki uşaqların ümumi yaş ortalaması = ' . $avrAge . '<br/>
    - Sinifdə ən kiçik = ' . $minAge[ 0 ][ 'ad' ] . ' və ən böyük ' . $maxAge[ 0 ][ 'ad' ] . '<br/>
    - Sinifdəki uşaqların ümumi sayı = ' . $n . '
    ';

}

echo myClass( $array );
