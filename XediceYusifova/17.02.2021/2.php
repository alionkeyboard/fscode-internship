<?php

/**
 * 2) Sözdəki hecaların sayını tapan funksiya.
 * İpucu üçün deyə bilərəm ki saitləri bir array-ə daxil edib istifadə edə bilərsiniz.
 */

function HecaSayi ( $soz )
{

	$sait = [ "a", "ı", "o", "u", "e", "ə", "i", "ö", "ü" ];
	$n    = 0;
	$say  = 0;

	while ( isset( $soz[ $n ] ) )
	{

		if ( in_array( $soz[ $n ], $sait ) )
		{
			$say++;
		}
		$n++;
	}

	return "$soz-də $say heca var";
}

$soz1 = 'kitab';
$soz2 = 'komputer';

echo HecaSayi( $soz1 ) . "<br />";
echo HecaSayi( $soz2 );