<?php

$arr = [ 1, 4, 5, 9, 6 ];
function edediOrta ( $arr )
{

	$value1 = 0;
	$arr1   = count( $arr );//sayini tapiriq PS.yerine hansi sertler islenecek bilmedim
	foreach ( $arr as $value )
	{//arraydaki ededlerin cemini tapmaq ucun istifade
		$value1 += $value;
	}

	$orta = $value1 / $arr1;//ededi ortasini tapmaq ucun istifade edilen funksiya
	echo $orta;

}

edediOrta( $arr );

?>