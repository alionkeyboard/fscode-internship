<?php 

function teyinet ($eded)

{
   
	if ($eded == 0 and is_numeric($eded))
	  {
            echo $eded. " daxil etdiniz";

      }
       
   			elseif ($eded > 0 ) 
   			{
   	             echo $eded. "  musbet ededdir";
   	  
            }

           		 elseif($eded < 0 )
           		 {

             		echo $eded. "  menfi ededdir";
   	 
           		 }

            			elseif(!is_numeric($eded))
            			{   
     	       				 echo "daxil etdiniz deyer eded deyil";
     		
           				 } 
    	
 }
   
	

$eded1 = 15;
$eded2 =-8;
$eded3 = 0;
$eded4 = 'a4';

echo teyinet($eded1)."</br>";
echo teyinet($eded2)."</br>";
echo teyinet($eded3)."</br>";
echo teyinet($eded4)."</br>";
 ?>