<?php 
/*Verilmiş array-dəki təkrarlanan value-ləri silən funksiya. Hazır funksiyalardan istifadə edə bilərsiniz.*/

$arr = [1,2,6,7,8,8,9,3,2,2,1,15,25,25];

function delSamAR($del)
{
	if ($del) {
		 print_r(array_unique($del));
	}
}
delSamAR($arr);



 ?>