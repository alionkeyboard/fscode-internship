<?php
$arr = [
	'qırmızı' => 12,
	'yaşıl'  => 6,
	'göy'     => 6

];

function rand_color ($array)
{
	$random_reng = [];
	foreach ( $array as $reng => $say )
	{

		for ( $i = 1; $i <= $say; $i++ )
		{
			$random_reng[] = $reng;
		}

	}

	return $random_reng[ array_rand( $random_reng ) ];
}

echo rand_color( $arr );


