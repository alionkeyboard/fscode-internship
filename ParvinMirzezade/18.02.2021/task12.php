<?php 


$ededler = [1, 4, 5, 9, 6];
$n = 0; // ededlerin sayi.
$edediorta = 0; // ededlerin ededi ortasi
$cem = 0; // ededlerin cemi


  // ilk önce array-in daxilindeki ededlerin sayını müəyyən edək.

  	foreach ($ededler as $eded) 
  	{
  		if($eded != 0)
  		{
  			$n++;
  		}
  	
  	}

  	 // daha sonra ededlerin cemini hesablayiriq for döngüsü yaratmaqla

		for ($i=0; $i <= $n; $i++)
		 { 

			@$cem +=$ededler[$i];
    

		}
    		 // Ən sonda ededlerin ededi ortasini tapiriq.

 			$edediorta = $cem / $n;


echo $edediorta;

   
 ?>