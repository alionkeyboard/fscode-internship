<?php 

function qepik($a,$b)
{
	if (rand($a,$b)>($a+$b)/2) { //burdaki rand funksiyasi 2 deyisenden birini secir a+b/2 terefi ise onlarin 50 faizli olmasina serait yaradir
		echo "Xerite";
	}else{
		echo "Pilleken";
	}
}

qepik(3,6); //istenilen reqemlerde yenilenende sans 50 faizdir.eyni reqemler yeni eyni deyerler alarsa sanslar 100 faiz olar








 ?>