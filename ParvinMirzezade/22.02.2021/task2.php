<?php 

$arr = [

		'qirmizi'=> 12,
		'yashil'=> 6,
		'goy'=> 6

		];

		  	$yeni_arr = array_values($arr); // Arrayin deyerlerinin al;r;q hesablama aparmaq ucun

         	$topla = array_sum($yeni_arr); // umumi sarlarin sayini tapiriq

        	 $ehtimal = array_rand($arr); // ehtimal olunan sarin adi 

         		if ( $ehtimal == "qirmizi")  // eger qirmizi sar cixarsa asagidaki ekrana yazsin
         		{
         	
         	       $hesabla = ($yeni_arr[0]/$topla)*100;
         		   echo "qirmizi şarin çıxma ehtimalı $hesabla %-dir";
         		   die();
                } 
         			elseif ($ehtimal == "yashil")  // eger yashil sar cixarsa asagidaki ekrana yazsin
         			{
         				$hesabla = ($yeni_arr[1]/$topla)*100;
         				echo "yashil şarin çıxma ehtimalı $hesabla %-dir";
         				die();
         			} 
            			elseif ($ehtimal == "goy") // eger goy sar cixarsa asagidaki ekrana yazsin
            			{
            				$hesabla = ($yeni_arr[2]/$topla)*100;
         					echo "goy şarin çıxma ehtimalı $hesabla %-dir";
         					die();
            			}
          
        				
				       
 echo $ehtimal;
 






 ?>