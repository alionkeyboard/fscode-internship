<?php 
/*  Nəticə təkrəqəmli ədəd olana qədər verilmiş inputdakı ədədin rəqəmlərini cəmləyən funksiya. Yazdığım funksiya reqemlerin cemi 4 reqemli eded olana qeder işləyir. Bunu artırmaq da olar. Amma bu funkisyani ümumi for dongusune salmaq olmaq mümkündürse zəhmət olmazsa paylaşardınız */


$eded = 3999;


// İlk önce ededi bir massive çeviririk
	@$array = array_map('intval', str_split($eded));

	// Massivi for döngüsünə salıb ededin reqemlerini toplayıq. Bunu tek reqem olana qeder davam etdiririk.
 
		for ($i=0; $i < count($array) ; $i++)
		 { 
	
	   		@$eded1 +=$array[$i];

 		}
  

 				 @$array1 = array_map('intval', str_split($eded1));


					for ($i=0; $i < count($array) ; $i++)
					 { 
	
						@$eded2 +=$array1[$i];

					}

						@$array2 = array_map('intval', str_split($eded2));

  							 for ($i=0; $i < count($array1) ; $i++) 
  							 { 
	
    							@$eded3 += $array2[$i];

							}

									@$array3 = array_map('intval', str_split($eded3));

  											 for ($i=0; $i < count($array1) ; $i++) 
  											 { 
	
   													 @$eded4 += $array3[$i];

											 }

echo $eded4; // 3

 ?>