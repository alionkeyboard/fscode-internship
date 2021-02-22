<?php

$ededler = [2, 5, 6, 1, 11, 3];

function getMax($numbers)  
{ 
   $n = count($numbers);  
   $max = $numbers[0]; 
   for ($b = 0; $b < $n; $b++)  
       if ($max < $numbers[$b]) 
           $max = $numbers[$b]; 
    return $max;        
} 
  

$max = getMax($ededler);

echo $max;

?>