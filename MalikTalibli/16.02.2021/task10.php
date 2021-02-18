<?php 

	$sinif = [

		'ad' => [
			'Nermin Eliyeva',
			'Kamil Rahimli',
			'Zaur Qurbaneliyev',
			'Melahet Isgenderli',
			'Ali Rzayev',
			'Ramin Orucov',
			'Veli Kerimli',
			'Zamiq Aliyev',
			'Esmaye Mustafayeva',
			'Veli kerimli',
		],

		'yash' => [
			2,
			19,
			12,
			12,
			11,
			19,
			13,
			2,
			18,
			18,
		],

		'cins' => [
			'q',
			'k',
			'k',
			'q',
			'k',
			'k',
			'k',
			'k',
			'q',
			'k',
		],



	];


	function sagird($sinif){

		$oglan = 0;
		$qiz = 0;
		$cins = $sinif['cins'];
		$say = count($cins);

		for ($i=0; $i < $say; $i++) { 
			if ($cins[$i] == 'q') {
				$qiz+=1;
			}else{
				$oglan+=1;
			}
		}

		return 'Sinifə '.$oglan.' oglan və '.$qiz.' qız var';
	}

	function ortalama($sinif){

		$yash = $sinif['yash'];
		$say = count($yash);
		$umumi = 0;

		for ($i=0; $i < $say; $i++) { 
			$umumi+=$yash[$i]; 
		}

		$ortalama = $umumi/$say;

		return 'Sinifin ortalama yaşı '.$ortalama.'-dir';
	}

	function boyuk($sinif){

		$yash = $sinif['yash'];
		$say = count($yash);
		$boyuk = 0;

		for ($i=0; $i < $say; $i++) { 
			$n = $i+1;

			 if (isset($yash[$n])) {

			 	if($yash[$boyuk]<$yash[$n]){
			 		$boyuk = $n;
			 	}
			 	
			 }
		}

		echo "Sinifin yashca boyukleri<br>";
		
		for ($i=0; $i < $say; $i++) { 

			if ($yash[$i]==$yash[$boyuk]) {

				echo $sinif['ad'][$i].'<br>';
			}
		}

		
	}

	function kicik($sinif){

		$yash = $sinif['yash'];
		$say = count($yash);
		$kicik = 0;

		for ($i=0; $i < $say; $i++) { 
			$n = $i+1;
		
			 if (isset($yash[$n])) {

			 	if($yash[$kicik]>$yash[$n]){
			 		$kicik = $n;
			 	}
			 	
			 }
		}
		
		echo "Sinifin yashca kicikleri<br>";

		for ($i=0; $i < $say; $i++) { 

			if ($yash[$i]==$yash[$kicik]) {

				echo $sinif['ad'][$i].'<br>';
			}
		}	
		
	}

	function say($sinif){

		$ad = $sinif['ad'];
		$say = count($ad);

		return 'Sinifdə cəmi '.$say.' şagird var';
	}

	echo sagird($sinif);
	echo "<br>";
	echo ortalama($sinif);
	echo "<br>";
	boyuk($sinif);
	echo "<br>";
	kicik($sinif);
	echo "<br>";
	echo say($sinif);

	
	

 ?>