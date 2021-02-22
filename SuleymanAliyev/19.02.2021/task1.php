<?php 

/*Verilmiş array-dəki ən böyük ədədi tapan funksiya. array_* funksiyaları və digər hazır funksiyalardan istifadə etmək olmaz.
Gözlənilən nəticə:
*/

$eded = [2,5,6,1,11,3];
$boyuk=0;

function enBoyuk($eded)
{
	 foreach ($eded as $key => $value) {
	 	//echo $value;
	 	if ($value>$boyuk) {
	 		$boyuk=$value;
	 	}
	 }
	 echo $boyuk;
}

enBoyuk($eded);






 ?>