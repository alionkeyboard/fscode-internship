<?php

/*
 * sozden X-den baslayaraq Y uzunlugunda hisseni kesen kod yazmaq
 *
 * bunu coxunuz duzgun yazmishdi, alternativ fikir olaraq menim de hellime baxa bilersiniz
 */

function sozu_kes ( $soz, $bashla, $uzunluq )
{
	$kesilmish_soz = '';

	/*
	 * burda --$bashla yazmagimda meqsed $bashlanin qiymetini 1 vahid azaltmaqdir
	 *
	 * eger $bashla-- yazsaydim, o zaman $i = 1 qalacaqdi,
	 * --$bashla olanda ise $i = 0 olur
	 *
	 * bashqa bir numune,
	 *
	 * $a = 1;
	 *
	 * echo $a++; // 1
	 *
	 * $a = 1;
	 *
	 * echo ++$a; // 2
	 *
	 *
	 * daha sonra for-da bele bir shert yazdim ki, eger cari index bashlangic + uzunluqdan kicikdirse o zaman
	 * ishe dushsun, eks halda dayansin
	 */
	for ( $i = --$bashla; $i < $bashla + $uzunluq; $i++ )
	{
		$kesilmish_soz .= $soz[ $i ];
	}

	return $kesilmish_soz;
}

/*
 * bu kodu run edib yoxlayib, yoxlamamaq da size qalib ;)
 */

echo '<3 from ';
echo sozu_kes( 'SELF', 0, 2 );
echo sozu_kes( 'COOL', 1, 2 );
echo sozu_kes( 'EARNED', 0, 2 );