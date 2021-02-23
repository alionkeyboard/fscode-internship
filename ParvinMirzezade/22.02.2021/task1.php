<?php 

$arr = [1,2,3,1,4,3,3,5];

$yeni_arr = [];

// Ilk öncə ededleri arrayin terkibindeki ededleri oxutdurmaq üçün for istifade edirik.
	for ($i=0; $i <= count($arr) ; $i++) 

	{ 
      // Şərt qoyuruq ki ,arrayin daxilinde deyerler heçə beraber deyilse ,aşağıdaki for döngüsünü döndersin
  		if (@$arr[$i] != '') 
  		{
  	
  			for ($k=$i+1; $k <=count($arr) ; $k++) 
  			{ 
  		
  				if (@$arr[$i] == @$arr[$k]) 
  				{
  			
  					$arr[$k] = '';
  				}

  					else
  					{

  						$yeni_arr[$arr[$i]] = $arr[$i];
  					}
  			}
  		}

	}


print_r($yeni_arr); 

// Hazır funkisyadan istifade etdikdə aşağıdaki kimi yazılır.

// $yeni_arr = array_unique($arr);
// print_r($yeni_arr); // Array ( [1] => 1 [2] => 2 [3] => 3 [4] => 4 [5] => 5 )



 ?>