<?php 

$ed = 39990;

function topla($ed)
{
$ar = str_split($ed);
$sum1= array_sum($ar);

if ($sum1!=integer) {
	$sum2=array_sum(str_split($sum1));
	echo $sum2;
}else{
	echo $sum1;
}
}
topla($ed);



 ?>