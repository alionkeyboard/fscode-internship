<?php 
	
	$x = 4;		
	$y = 6;

	$x-=1;//array 0-dan bashladigi ucun
	$y = $x + $y;

	$text = 'Bu gunluk son tapshiriq.';

	for ($x; $x <= $y; $x++) { 
		echo $text[$x];
	}

 ?>