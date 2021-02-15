<?php

/**************TASK3**********/
function DMYformat ( $tarix )
{
	$tarix  = explode( "-", $tarix );
	$month  = $tarix[ 1 ];
	$months = [
		'01' => 'Yanvar',
		'02' => 'Fevral.',
		'03' => 'Mart',
		'04' => 'Aprel',
		'05' => 'May',
		'06' => 'Iyun',
		'07' => 'Iyul',
		'08' => 'Avqust.',
		'09' => 'Sentyabr.',
		'10' => 'Oktyabr',
		'11' => 'Noyabr',
		'12' => 'Dekabr'
	];

	return $tarix[ 0 ] . " " . $months[ $month ] . ", " . $tarix[ 2 ] . "<br>";
}

echo DMYformat( "07-04-2000" );
echo DMYformat( "21-07-1977" );

?>