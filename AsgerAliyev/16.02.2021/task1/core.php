<?php

function statistics ( $arr )
{
	//Oglan ve Qiz sayi, yashlarin cemi:
	$qizlarin_sayi   = 0;
	$oglanlarin_sayi = 0;
	$yashlarin_cemi  = 0;
	$en_boyuk_yash   = 0;
	$toplam_say      = count( $arr );

	foreach ( $arr as $val )
	{
		if ( $val[ 'cins' ] === 'q' )
		{
			$qizlarin_sayi++;
		}
		else
		{
			$oglanlarin_sayi++;
		}

		$yashlarin_cemi += $val[ 'yash' ];
		$yash[]         = $val[ 'yash' ];

		if ( $yash[ 0 ] > $val[ 'yash' ] )
		{
			$yash[ 0 ] = $val[ 'yash' ];
		}
		else if ( $val[ 'yash' ] > $en_boyuk_yash )
		{
			$en_boyuk_yash = $val[ 'yash' ];
		}

		if ( $en_boyuk_yash === $val [ 'yash' ] )
		{
			$en_boyuk_ushaq = $val[ 'ad' ];
		}

		if ( $yash [ 0 ] === $val [ 'yash' ] )
		{
			$en_kicik_ushaq = $val [ 'ad' ];
		}

	}

	$yash_ortalamasi = $yashlarin_cemi / $toplam_say;

	return [
		'Toplam ushaq sayi'        => $toplam_say,
		'Qizlarin sayi'            => $qizlarin_sayi,
		'Oglanlarin sayi'          => $oglanlarin_sayi,
		'Sinifin yash ortalamasi'  => $yash_ortalamasi,
		'Sinifdeki en kicik ushaq' => $en_kicik_ushaq,
		'Sinifdeki en boyuk ushaq' => $en_boyuk_ushaq
	];
}

