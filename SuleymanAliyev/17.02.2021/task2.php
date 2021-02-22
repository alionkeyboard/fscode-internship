<?php 



function heca($soz)
{	
	$arr = ['a','ı','o','u','e','ə','i','ö','ü']; //qarsilasdirilacaq 
	$chars = preg_split('//', $soz,-1,PREG_SPLIT_NO_EMPTY);//yazdığımız sözu hərflərə parcalayırıq
	echo count(array_intersect($arr, $chars)); //birinci funksiya ile qarsilasdirilir. ikinci funksiya ilə qarşılaşmaların miqdarı sayılır

	
}

heca('kitab'); echo "<br>";// 2 heca var
heca('komputer');//3 heca var






 ?>