<?php 

	$number = $_POST['number'];
	$tam = '';
	$kesr = '';

	for ($i=0; isset($number[$i]) ; $i++) { 

		if ($number[$i] != '.') {

		//noqte yoxdusa $number[$i] $tam-in icine atiriq
			$tam .= $number[$i];

		}else{

			for ($i++; isset($number[$i]) ; $i++) { 

				//$number[$i] noqtedise $i bir artirilir(noqteni goturmemekcun) ve $kesr icine atilir
				$kesr .= $number[$i];

			}
		}
	}


//kesr ededin kicik ve boyuk taplarini tapiriq
$boyuk = $number - $tam;
$kicik = $tam + 1 - $number;
	
include('response.php');
 ?>

 